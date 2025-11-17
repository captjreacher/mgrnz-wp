// supabase/functions/ai-intake-decision/index.ts

import { createClient } from "https://esm.sh/@supabase/supabase-js@2.47.0";

// ---- ENV ----

const SUPABASE_URL = Deno.env.get("SUPABASE_URL")!;
const SUPABASE_SERVICE_ROLE_KEY = Deno.env.get("SUPABASE_SERVICE_ROLE_KEY")!;

const supabase = createClient(SUPABASE_URL, SUPABASE_SERVICE_ROLE_KEY);

type DecisionPayload = {
  intake_id?: string;
  decision?: "subscribe" | "consult" | string;
};

Deno.serve(async (req: Request): Promise<Response> => {
  if (req.method !== "POST") {
    return new Response("Method not allowed", { status: 405 });
  }

  let body: DecisionPayload;
  try {
    body = await req.json();
  } catch {
    return jsonError("Invalid JSON body", 400);
  }

  const { intake_id, decision } = body;

  if (!intake_id || !decision) {
    return jsonError("Missing required fields: intake_id, decision", 400);
  }

  if (decision !== "subscribe" && decision !== "consult") {
    return jsonError("Decision must be 'subscribe' or 'consult'", 400);
  }

  // 1) Update intake record
  const { error: updErr } = await supabase
    .from("ai_intake_requests")
    .update({
      status: "completed",
      decision,
      decided_at: new Date().toISOString(),
    })
    .eq("id", intake_id);

  if (updErr) {
    console.error("Error updating intake decision:", updErr);
    return jsonError("Failed to save decision", 500);
  }

  // 2) TODO: Notifications (email/Slack/Make webhook) – v1 stub
  // You can add another fetch() here to hit Make, email, etc.

  return new Response(JSON.stringify({ ok: true }), {
    status: 200,
    headers: { "Content-Type": "application/json" },
  });
});

// ---- HELPERS ----

function jsonError(message: string, status = 500) {
  return new Response(JSON.stringify({ error: message }), {
    status,
    headers: { "Content-Type": "application/json" },
  });
}
