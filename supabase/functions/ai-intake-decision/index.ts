import { createClient } from "https://esm.sh/@supabase/supabase-js@2";

const SUPABASE_URL = Deno.env.get("SUPABASE_URL")!;
const SUPABASE_SERVICE_ROLE_KEY = Deno.env.get("SUPABASE_SERVICE_ROLE_KEY")!;
const NOTIFY_WEBHOOK = Deno.env.get("AI_INTAKE_WEBHOOK") || "";

const supabase = createClient(SUPABASE_URL, SUPABASE_SERVICE_ROLE_KEY);

Deno.serve(async (req) => {
  try {
    if (req.method !== "POST") {
      return new Response("Method not allowed", { status: 405 });
    }

    const body = await req.json().catch(() => ({}));
    const intakeId = body.intake_id as string;
    const decision = body.decision as string; // "subscribe" | "consult"

    if (!intakeId || !["subscribe", "consult"].includes(decision)) {
      return new Response(
        JSON.stringify({ error: "intake_id and valid decision are required" }),
        { status: 400, headers: { "Content-Type": "application/json" } },
      );
    }

    const { data: intake, error: readErr } = await supabase
      .from("ai_intake_requests")
      .select("*")
      .eq("id", intakeId)
      .single();

    if (readErr || !intake) {
      console.error("Decision read error", readErr);
      throw new Error("Intake not found");
    }

    const { error: updErr } = await supabase
      .from("ai_intake_requests")
      .update({
        status: "completed",
        decision,
        decided_at: new Date().toISOString(),
      })
      .eq("id", intakeId);

    if (updErr) {
      console.error("Decision update error", updErr);
      throw new Error("Failed to update decision");
    }

    // Optional: ping a webhook (email service, Make, Slack, etc.)
    if (NOTIFY_WEBHOOK) {
      try {
        await fetch(NOTIFY_WEBHOOK, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({
            type: "ai_workflow_decision",
            intake_id: intakeId,
            decision,
            goal: intake.goal,
            email: intake.email,
          }),
        });
      } catch (e) {
        console.error("Notification webhook error", e);
      }
    }

    return new Response(JSON.stringify({ ok: true }), {
      status: 200,
      headers: { "Content-Type": "application/json" },
    });
  } catch (err) {
    console.error("ai-intake-decision error", err);
    return new Response(
      JSON.stringify({ error: (err as Error).message ?? "Unknown error" }),
      { status: 500, headers: { "Content-Type": "application/json" } },
    );
  }
});
