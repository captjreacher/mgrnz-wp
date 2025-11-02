// deno-lint-ignore-file no-explicit-any
import "jsr:@supabase/functions-js/edge-runtime.d.ts";

interface PostMeta {
  title: string;
  date: string;            // YYYY-MM-DD
  slug: string;
  tags?: string[];
  categories?: string[];
  summary?: string;
  createPost?: boolean;    // default true
}

interface BodyPreviewUrl {
  mode: "preview-url";
  previewUrl: string;
  post: PostMeta;
  overrideId?: string;     // optional file name override e.g. "169924746221192336"
}

interface BodyApi {
  mode: "api";
  campaignId: string;
  post: PostMeta;
}

type ReqBody = BodyPreviewUrl | BodyApi;

// --- env: set in Supabase secrets ---
const GH_TOKEN = Deno.env.get("GITHUB_TOKEN")!;
const GH_REPO  = Deno.env.get("GITHUB_REPO")!;     // e.g. "captjreacher/mgrnz-blog"
const GH_BRANCH= Deno.env.get("GITHUB_BRANCH") ?? "main";
const ML_API   = "https://api.mailerlite.com/api";
const ML_KEY   = Deno.env.get("MAILERLITE_API_KEY"); // optional if using API mode

const GH_API   = "https://api.github.com";

function ensure(val: string | undefined | null, name: string) {
  if (!val) throw new Error(`${name} is required`);
  return val;
}

async function getRepoHeadSha(repo: string, branch: string) {
  const r = await fetch(`${GH_API}/repos/${repo}/git/refs/heads/${branch}`, {
    headers: { Authorization: `Bearer ${GH_TOKEN}`, Accept: "application/vnd.github+json" }
  });
  if (!r.ok) throw new Error(`Failed to read branch ref: ${r.status} ${await r.text()}`);
  const data = await r.json();
  return data.object.sha as string;
}

async function getTreeSha(repo: string, commitSha: string) {
  const r = await fetch(`${GH_API}/repos/${repo}/git/commits/${commitSha}`, {
    headers: { Authorization: `Bearer ${GH_TOKEN}`, Accept: "application/vnd.github+json" }
  });
  if (!r.ok) throw new Error(`Failed to read commit: ${r.status} ${await r.text()}`);
  const data = await r.json();
  return data.tree.sha as string;
}

async function createBlob(repo: string, content: string, isBinary = false) {
  const r = await fetch(`${GH_API}/repos/${repo}/git/blobs`, {
    method: "POST",
    headers: { Authorization: `Bearer ${GH_TOKEN}`, Accept: "application/vnd.github+json" },
    body: JSON.stringify({ content: isBinary ? btoa(content) : content, encoding: isBinary ? "base64" : "utf-8" })
  });
  if (!r.ok) throw new Error(`Failed to create blob: ${r.status} ${await r.text()}`);
  return (await r.json()).sha as string;
}

async function createTree(repo: string, baseTreeSha: string, files: {path: string, content: string}[]) {
  const tree = await Promise.all(files.map(async (f) => ({
    path: f.path,
    mode: "100644",
    type: "blob",
    sha: await createBlob(repo, f.content, false)
  })));
  const r = await fetch(`${GH_API}/repos/${repo}/git/trees`, {
    method: "POST",
    headers: { Authorization: `Bearer ${GH_TOKEN}`, Accept: "application/vnd.github+json" },
    body: JSON.stringify({ base_tree: baseTreeSha, tree })
  });
  if (!r.ok) throw new Error(`Failed to create tree: ${r.status} ${await r.text()}`);
  return (await r.json()).sha as string;
}

async function createCommit(repo: string, message: string, treeSha: string, parentSha: string) {
  const r = await fetch(`${GH_API}/repos/${repo}/git/commits`, {
    method: "POST",
    headers: { Authorization: `Bearer ${GH_TOKEN}`, Accept: "application/vnd.github+json" },
    body: JSON.stringify({ message, tree: treeSha, parents: [parentSha] })
  });
  if (!r.ok) throw new Error(`Failed to create commit: ${r.status} ${await r.text()}`);
  return (await r.json()).sha as string;
}

async function updateRef(repo: string, branch: string, commitSha: string) {
  const r = await fetch(`${GH_API}/repos/${repo}/git/refs/heads/${branch}`, {
    method: "PATCH",
    headers: { Authorization: `Bearer ${GH_TOKEN}`, Accept: "application/vnd.github+json" },
    body: JSON.stringify({ sha: commitSha, force: false })
  });
  if (!r.ok) throw new Error(`Failed to update ref: ${r.status} ${await r.text()}`);
}

function ymdToYearMonth(ymd: string) {
  const [y, m] = ymd.split("-");
  if (!y || !m) throw new Error("post.date must be YYYY-MM-DD");
  return { year: y, month: m.padStart(2, "0") };
}

function buildFrontMatter(p: PostMeta) {
  const lines = [
    "---",
    `title: "${p.title.replace(/"/g, '\\"')}"`,
    `date: ${p.date}T12:00:00+13:00`,
    ...(p.summary ? [`summary: "${p.summary.replace(/"/g, '\\"')}"`] : []),
    ...(p.tags?.length ? [`tags: [${p.tags.map(t => `"${t}"`).join(", ")}]`] : []),
    ...(p.categories?.length ? [`categories: [${p.categories.map(c => `"${c}"`).join(", ")}]`] : []),
    "draft: false",
    "---",
    ""
  ];
  return lines.join("\n");
}

async function fetchMailerLitePreview(url: string) {
  const res = await fetch(url, { headers: { "User-Agent": "Mozilla/5.0" }});
  if (!res.ok) throw new Error(`Failed to fetch preview HTML (${res.status})`);
  return await res.text();
}

async function fetchMailerLiteCampaignHtml(campaignId: string) {
  if (!ML_KEY) throw new Error("MAILERLITE_API_KEY not configured");
  // If ML exposes a content endpoint, you can swap here. Fallback: use campaign "preview" endpoint if available.
  const res = await fetch(`${ML_API}/v2/campaigns/${campaignId}/content`, {
    headers: { "Authorization": `Bearer ${ML_KEY}`, "Content-Type": "application/json" }
  });
  if (!res.ok) throw new Error(`MailerLite API error: ${res.status} ${await res.text()}`);
  const data = await res.json() as any;
  // Expect data.html or similar – adapt as needed:
  const html = data?.html ?? data?.content ?? "";
  if (!html) throw new Error("No HTML content returned from MailerLite");
  return html as string;
}

function deriveIdFromPreviewUrl(url: string, override?: string) {
  if (override) return override;
  // e.g. https://preview.mailerlite.io/preview/1849787/emails/169924746221192336
  const match = url.match(/emails\/([^/?#]+)/i);
  return match?.[1] ?? `ml-${crypto.randomUUID()}`;
}

Deno.serve(async (req) => {
  try {
    if (req.method === "OPTIONS") {
      return new Response(null, {
        headers: {
          "Access-Control-Allow-Origin": "*",
          "Access-Control-Allow-Methods": "POST, OPTIONS",
          "Access-Control-Allow-Headers": "Content-Type, Authorization"
        }
      });
    }

    if (req.method !== "POST") {
      return new Response("Only POST supported", { status: 405 });
    }

    const body = (await req.json()) as ReqBody;

    ensure(GH_TOKEN, "GITHUB_TOKEN");
    ensure(GH_REPO, "GITHUB_REPO");

    const meta = ("post" in body) ? body.post : null;
    if (!meta) throw new Error("Missing post metadata");
    const createPost = meta.createPost !== false;

    // 1) get HTML
    let html = "";
    let assetId = "";
    if (body.mode === "preview-url") {
      assetId = deriveIdFromPreviewUrl(body.previewUrl, body.overrideId);
      html = await fetchMailerLitePreview(body.previewUrl);
    } else {
      assetId = body.campaignId;
      html = await fetchMailerLiteCampaignHtml(body.campaignId);
    }

    // 2) prepare repo write
    const head = await getRepoHeadSha(GH_REPO, GH_BRANCH);
    const baseTree = await getTreeSha(GH_REPO, head);

    // 3) stage files
    const files: {path: string, content: string}[] = [];
    // raw HTML asset
    files.push({
      path: `assets/mailerlite/${assetId}.html`,
      content: html
    });

    // optional: generated post that embeds the raw html
    if (createPost) {
      const { year, month } = ymdToYearMonth(meta.date);
      const front = buildFrontMatter(meta);
      const md = [
        front,
        `{{< ml-raw file="${assetId}.html" >}}`,
        ""
      ].join("\n");
      files.push({
        path: `content/posts/${year}/${month}/${meta.slug}/index.md`,
        content: md
      });
    }

    // 4) commit
    const newTree = await createTree(GH_REPO, baseTree, files);
    const commitSha = await createCommit(
      GH_REPO,
      `feat: import MailerLite campaign ${assetId} -> assets + post`,
      newTree,
      head
    );
    await updateRef(GH_REPO, GH_BRANCH, commitSha);

    return new Response(JSON.stringify({
      ok: true,
      saved: {
        asset: `assets/mailerlite/${assetId}.html`,
        post: createPost ? `content/posts/${ymdToYearMonth(meta.date).year}/${ymdToYearMonth(meta.date).month}/${meta.slug}/index.md` : null
      },
      commit: commitSha
    }), {
      headers: { "Content-Type": "application/json", "Access-Control-Allow-Origin": "*" }
    });

  } catch (err) {
    return new Response(JSON.stringify({ ok: false, error: String(err?.message ?? err) }), {
      status: 500,
      headers: { "Content-Type": "application/json", "Access-Control-Allow-Origin": "*" }
    });
  }
});
