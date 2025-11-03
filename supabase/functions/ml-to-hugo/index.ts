// Deno Deploy (Supabase Edge Function)
import { createClient } from "https://esm.sh/@supabase/supabase-js@2";

const SUPABASE_URL = Deno.env.get("SUPABASE_URL")!;
const SERVICE_KEY  = Deno.env.get("SUPABASE_SERVICE_ROLE_KEY")!;

// Optional: verify signature if you set a secret in MailerLite
const ML_SECRET = Deno.env.get("MAILERLITE_WEBHOOK_SECRET") || "";

const supabase = createClient(SUPABASE_URL, SERVICE_KEY);

function ok(json: unknown, status = 200) {
  return new Response(JSON.stringify(json), {
    status,
    headers: {
      "content-type": "application/json",
      "access-control-allow-origin": "*",
    },
  });
}

function bad(msg: string, status = 400) {
  return ok({ error: msg }, status);
}

Deno.serve(async (req) => {
  if (req.method === "OPTIONS") {
    return new Response(null, {
      headers: {
        "access-control-allow-origin": "*",
        "access-control-allow-methods": "POST,OPTIONS",
        "access-control-allow-headers": "content-type,x-mailerlite-signature",
      },
    });
  }

  if (req.method !== "POST") return bad("Method not allowed", 405);

  // Optional signature verification (if configured)
  if (ML_SECRET) {
    const sig = req.headers.get("x-mailerlite-signature") || "";
    const bodyText = await req.clone().text();
    const encoder = new TextEncoder();
    const key = await crypto.subtle.importKey(
      "raw", encoder.encode(ML_SECRET), { name: "HMAC", hash: "SHA-256" }, false, ["sign", "verify"]
    );
    const mac = await crypto.subtle.sign("HMAC", key, encoder.encode(bodyText));
    const digest = Array.from(new Uint8Array(mac)).map(b => b.toString(16).padStart(2, "0")).join("");
    if (sig !== digest) return bad("Invalid signature", 401);
  }

  const payload = await req.json().catch(() => null);
  if (!payload) return bad("Invalid JSON");

  // MailerLite typically posts { type, data: { email, id, status, fields, ... } }
  const type  = payload.type || payload.event || "unknown";
  const data  = payload.data || payload.subscriber || {};
  const email = (data.email || "").toLowerCase();

  if (!email) return bad("Missing email");

  const row = {
    email,
    ml_id: data.id ?? null,
    status: data.status ?? (type.includes("unsubscribe") ? "unsubscribed" : "subscribed"),
    source: "mailerlite",
    subscribed_at: data.subscribed_at ? new Date(data.subscribed_at).toISOString() : new Date().toISOString(),
    fields: data.fields ?? data ?? null,
  };

  const { error } = await supabase
    .from("newsletter_subscribers")
    .upsert(row, { onConflict: "email" });

  if (error) return bad(error.message, 500);

  return ok({ ok: true, type });
});
