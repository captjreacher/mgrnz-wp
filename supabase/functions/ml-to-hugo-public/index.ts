// deno-lint-ignore-file no-explicit-any
import "jsr:@supabase/functions-js/edge-runtime.d.ts";

/**
 * Accepts:
 *  { mode: "preview-url", previewUrl, post, overrideId? }
 *  { mode: "api",         campaignId, post }
 *
 * Optional flags (body):
 *  - sanitize?: boolean            // remove common tracking pixels
 *  - localizeImages?: boolean      // hook point to rewrite <img src> (left as TODO)
 *  - timezoneOffset?: string       // e.g. "+13:00" inserted into front matter date
 *
 * Env (Supabase secrets):
 *  - GITHUB_TOKEN  (required)
 *  - GITHUB_REPO   (required) e.g. "captjreacher/mgrnz-blog"
 *  - GITHUB_BRANCH (default "main")
 *  - MAILERLITE_API_KEY (required only when mode="api")
 */

type Mode = "preview-url" | "api";

interface PostMeta {
  title: string;
  date: string;            // YYYY-MM-DD
  slug: string;
  tags?: string[];
  categories?: string[];
  summary?: string;
  createPost?: boolean;    // default true
}

type ReqBody =
  | { mode: "preview-url"; previewUrl: string; post: PostMeta; overrideId?: string; sanitize?: boolean; localizeImages?: boolean; timezoneOffset?: string }
  | { mode: "api"; campaignId: string; post: PostMeta; sanitize?: boolean; localizeImages?: boolean; timezoneOffset?: string };

const GH_TOKEN  = Deno.env.get("GITHUB_TOKEN") ?? "";
const GH_REPO   = Deno.env.get("GITHUB_REPO")  ?? "";
const GH_BRANCH = Deno.env.get("GITHUB_BRANCH") ?? "main";
const ML_KEY    = Deno.env.get("MAILERLITE_API_KEY") ?? "";
const ML_API    = "https://api.mailerlite.com/api";
const GH_API    = "https://api.github.com";

// ---------- small helpers ----------
const json = (data: unknown, status = 200) =>
  new Response(JSON.stringify(data), {
    status,
    headers: {
      "Content-Type": "application/json",
      "Access-Control-Allow-Origin": "*",
      "Access-Control-Allow-Methods": "POST, OPTIONS",
      "Access-Control-Allow-Headers": "Content-Type, Authorization",
    },
  });

const bad = (msg: string, status = 400) => json({ ok: false, error: msg }, status);
const requireEnv = (v: string, name: string) => { if (!v) throw new Error(`${name} is required`); return v; };

const isYyyyMmDd = (s: string) => /^\d{4}-\d{2}-\d{2}$/.test(s);

function ymdToYearMonth(ymd: string) {
  if (!isYyyyMmDd(ymd)) throw new Error("post.date must be YYYY-MM-DD");
  const [y, m] = ymd.split("-");
  return { year: y, month: m };
}

function sanitizeHtml(html: string) {
  // Minimal “safe” cleanup for common tracking pixels (1x1 gifs, ml tracking gif)
  return html
    // Remove 1x1 transparent gifs
    .replace(/<img[^>]+(?:width\s*=\s*["']?1["']?)[^>]*(?:height\s*=\s*["']?1["']?)[^>]*>/gi, "")
    // Remove obvious tracking query params (ml_*), keep conservative
    .replace(/\?ml_=[^"' ]+/gi, "");
}

function deriveIdFromPreviewUrl(url: string, override?: string) {
  if (override) return override;
  const match = url.match(/emails\/([^/?#]+)/i);
  return match?.[1] ?? `ml-${crypto.randomUUID()}`;
}

// ---------- GitHub helpers ----------
async function gh<T>(path: string, init?: RequestInit): Promise<T> {
  const r = await fetch(`${GH_API}${path}`, {
    ...init,
    headers: {
      "Authorization": `Bearer ${GH_TOKEN}`,
      "Accept": "application/vnd.github+json",
      ...(init?.headers || {}),
    },
  });
  if (!r.ok) throw new Error(`${path} -> ${r.status} ${await r.text()}`);
  return await r.json();
}

async function getHeadSha(repo: string, branch: string) {
  const ref = await gh<{ object: { sha: string } }>(`/repos/${repo}/git/refs/heads/${branch}`);
  return ref.object.sha;
}

async function getBaseTreeSha(repo: string, commitSha: string) {
  const commit = await gh<{ tree: { sha: string } }>(`/repos/${repo}/git/commits/${commitSha}`);
  return commit.tree.sha;
}

async function createBlob(repo: string, content: string) {
  const res = await gh<{ sha: string }>(`/repos/${repo}/git/blobs`, {
    method: "POST",
    body: JSON.stringify({ content, encoding: "utf-8" }),
  });
  return res.sha;
}

async function createTree(repo: string, baseTreeSha: string, files: { path: string; content: string }[]) {
  const tree = await Promise.all(
    files.map(async (f) => ({
      path: f.path,
      mode: "100644",
      type: "blob",
      sha: await createBlob(repo, f.content),
    })),
  );

  const res = await gh<{ sha: string }>(`/repos/${repo}/git/trees`, {
    method: "POST",
    body: JSON.stringify({ base_tree: baseTreeSha, tree }),
  });
  return res.sha;
}

async function createCommit(repo: string, message: string, treeSha: string, parentSha: string) {
  const res = await gh<{ sha: string }>(`/repos/${repo}/git/commits`, {
    method: "POST",
    body: JSON.stringify({ message, tree: treeSha, parents: [parentSha] }),
  });
  return res.sha;
}

async function updateRef(repo: string, branch: string, commitSha: string) {
  await gh(`/repos/${repo}/git/refs/heads/${branch}`, {
    method: "PATCH",
    body: JSON.stringify({ sha: commitSha, force: false }),
  });
}

// ---------- content fetchers ----------
async function fetchPreviewHtml(url: string) {
  const res = await fetch(url, {
    redirect: "follow",
    headers: { "User-Agent": "Mozilla/5.0" },
  });
  if (!res.ok) throw new Error(`Failed to fetch preview HTML: ${res.status}`);
  return await res.text();
}

async function fetchApiHtml(campaignId: string) {
  requireEnv(ML_KEY, "MAILERLITE_API_KEY");
  const res = await fetch(`${ML_API}/v2/campaigns/${campaignId}/content`, {
    headers: {
      "Authorization": `Bearer ${ML_KEY}`,
      "Content-Type": "application/json",
    },
  });
  if (!res.ok) throw new Error(`MailerLite API error: ${res.status} ${await res.text()}`);
  const data = await res.json() as any;
  const html = data?.html ?? data?.content ?? "";
  if (!html) throw new Error("No HTML content returned from MailerLite");
  return html as string;
}

// ---------- front matter ----------
function buildFrontMatter(p: PostMeta, tz = "+13:00") {
  const lines = [
    "---",
    `title: "${p.title.replace(/"/g, '\\"')}"`,
    `date: ${p.date}T12:00:00${tz}`,
    ...(p.summary ? [`summary: "${p.summary.replace(/"/g, '\\"')}"`] : []),
    ...(p.tags?.length ? [`tags: [${p.tags.map((t) => `"${t}"`).join(", ")}]`] : []),
    ...(p.categories?.length ? [`categories: [${p.categories.map((c) => `"${c}"`).join(", ")}]`] : []),
    "draft: false",
    "---",
    "",
  ];
  return lines.join("\n");
}

// ---------- request guard ----------
function guardBody(b: any): b is ReqBody {
  if (!b || typeof b !== "object") return false;
  if (b.mode === "preview-url") return typeof b.previewUrl === "string" && b.post && typeof b.post.title === "string";
  if (b.mode === "api") return typeof b.campaignId === "string" && b.post && typeof b.post.title === "string";
  return false;
}

// ---------- main handler ----------
Deno.serve(async (req) => {
  try {
    if (req.method === "OPTIONS") return json(null, 204);
    if (req.method !== "POST") return bad("Only POST supported", 405);

    // env presence
    requireEnv(GH_TOKEN, "GITHUB_TOKEN");
    requireEnv(GH_REPO, "GITHUB_REPO");

    const body = await req.json().catch(() => null);
    if (!guardBody(body)) return bad("Invalid body. Expect { mode, post, ... }");

    const post = body.post as PostMeta;
    if (!isYyyyMmDd(post.date)) return bad("post.date must be YYYY-MM-DD");
    if (!post.slug) return bad("post.slug is required");

    // 1) fetch HTML
    let assetId: string;
    let html: string;

    if (body.mode === "preview-url") {
      assetId = deriveIdFromPreviewUrl(body.previewUrl, body.overrideId);
      html = await fetchPreviewHtml(body.previewUrl);
    } else {
      assetId = body.campaignId;
      html = await fetchApiHtml(body.campaignId);
    }

    if (body.sanitize) html = sanitizeHtml(html);

    // (Optional) localizeImages hook – stub for future enhancement
    if (body.localizeImages) {
      // TODO: download external images to /static/emails/<assetId>/... and rewrite <img src="">
      // Keeping as-is to avoid surprises; email already has absolute URLs.
    }

    // 2) prepare files
    const files: { path: string; content: string }[] = [];
    files.push({ path: `assets/mailerlite/${assetId}.html`, content: html });

    const createPost = post.createPost !== false;
    const tz = typeof body.timezoneOffset === "string" ? body.timezoneOffset : "+13:00";

    if (createPost) {
      const { year, month } = ymdToYearMonth(post.date);
      const front = buildFrontMatter(post, tz);
      const md = `${front}{{< ml-raw file="${assetId}.html" >}}\n`;
      files.push({ path: `content/posts/${year}/${month}/${post.slug}/index.md`, content: md });
    }

    // 3) commit
    const head = await getHeadSha(GH_REPO, GH_BRANCH);
    const baseTree = await getBaseTreeSha(GH_REPO, head);
    const newTree = await createTree(GH_REPO, baseTree, files);
    const commitSha = await createCommit(
      GH_REPO,
      `feat: import MailerLite campaign ${assetId} -> assets + post`,
      newTree,
      head,
    );
    await updateRef(GH_REPO, GH_BRANCH, commitSha);

    return json({
      ok: true,
      saved: {
        asset: `assets/mailerlite/${assetId}.html`,
        post: createPost ? `content/posts/${post.date.slice(0, 4)}/${post.date.slice(5, 7)}/${post.slug}/index.md` : null,
      },
      commit: commitSha,
    });
  } catch (err: any) {
    return json({ ok: false, error: String(err?.message ?? err) }, 500);
  }
});
