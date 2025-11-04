// src/lib/posts.js  (folders like: src/posts/<folder>/index.md|index.html)
import matter from "gray-matter";
import { marked } from "marked";

// grab index files in nested post folders
const mdFiles   = import.meta.glob("../posts/**/index.md",   { as: "raw", eager: true });
const htmlFiles = import.meta.glob("../posts/**/index.html", { as: "raw", eager: true });
const files     = { ...mdFiles, ...htmlFiles };

// turn "2. This automation" → "this-automation"
const slugify = (s) =>
  s.toLowerCase()
   .replace(/^\d+\.\s*/, "")     // drop numeric prefix like "2. "
   .replace(/[^a-z0-9]+/g, "-")  // non-alnum → dash
   .replace(/^-+|-+$/g, "");

function parse(path, raw) {
  const folder = path.split("/").slice(-2, -1)[0];
  const slug = slugify(folder);

  if (path.endsWith(".md")) {
    const { data, content } = matter(raw);
    return {
      slug,
      title: data.title || folder,
      date: data.date || "",
      excerpt: data.excerpt || "",
      html: marked.parse(content),
    };
  }

  // HTML: optional front-matter in an HTML comment
  const fm = raw.match(/<!--\s*---([\s\S]*?)---\s*-->/);
  let meta = {}, body = raw;
  if (fm) {
    fm[1].trim().split("\n").forEach(l => {
      const [k, ...v] = l.split(":");
      meta[k.trim()] = v.join(":").trim();
    });
    body = raw.replace(fm[0], "").trim();
  }
  return {
    slug,
    title: meta.title || folder,
    date: meta.date || "",
    excerpt: meta.excerpt || "",
    html: body,
  };
}

const posts = Object.entries(files).map(([p, raw]) => parse(p, raw))
  .sort((a, b) => (a.date < b.date ? 1 : -1));

export const getPosts = () => posts;
export const getPost  = (slug) => posts.find(p => p.slug === slug);
