// supabase/functions/wp-sync/index.ts
const cors = {
  "Access-Control-Allow-Origin": "*",
  "Access-Control-Allow-Methods": "GET,POST,OPTIONS",
  "Access-Control-Allow-Headers": "Content-Type, X-Webhook-Secret",
};

Deno.serve(async (req: Request): Promise<Response> => {
  // CORS preflight
  if (req.method === "OPTIONS") {
    return new Response(null, { headers: cors });
  }

  const secretHeader = req.headers.get("x-webhook-secret") ?? "";
  const expected = Deno.env.get("WEBHOOK_SECRET") ?? "";
  if (!expected || secretHeader !== expected) {
    // Log for debugging but avoid echoing secrets
    console.log(JSON.stringify({ ts: new Date().toISOString(), auth: "fail" }));
    return new Response("Unauthorized", { status: 401, headers: cors });
  }

  let body: any = {};
  try {
    body = await req.json();
  } catch (_) {
    return new Response(JSON.stringify({ ok: false, error: "invalid_json" }), {
      status: 400,
      headers: { ...cors, "Content-Type": "application/json" },
    });
  }

  // Log the essentials so you can see it in `functions logs`
  console.log(JSON.stringify({
    ts: new Date().toISOString(),
    event: body?.event,
    post_id: body?.post_id,
    slug: body?.slug,
    status: body?.status,
  }));

  return new Response(JSON.stringify({ ok: true, received: body?.event ?? null }), {
    status: 200,
    headers: { ...cors, "Content-Type": "application/json" },
  });
});
