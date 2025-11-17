// supabase/functions/ai-intake-decision/index.ts
import { createClient } from "https://esm.sh/@supabase/supabase-js@2";

const SUPABASE_URL = Deno.env.get("SUPABASE_URL")!;
const SUPABASE_SERVICE_ROLE_KEY = Deno.env.get("SUPABASE_SERVICE_ROLE_KEY")!;
const NOTIFY_WEBHOOK = Deno.env.get("AI_INTAKE_WEBHOOK") || "";

const supabase = createClient(SUPABASE_URL, SUPABASE_SERVICE_ROLE_KEY);

// 🔥 CORS configuration
const CORS_HEADERS = {
  "Access-Control-Allow-Origin": "https://mgrnz.com",
  "Access-Control-Allow-Headers":
    "authorization, x-client-info, apikey, content-type",
  "Access-Control-Allow-Methods": "POST, OPTIONS",
  "Access-Control-Max-Age": "86400",
};

Deno.serve(async (req) => {
  // 1️⃣ Preflight
  if (req.method === "OPTIONS") {
    return new Response("ok", {
      status: 200,
      headers: CORS_HEADERS,
    });
  }

  try {
    if (req.method !== "POST") {
      return new Response("Method not allowed", {
        status: 405,
        headers: CORS_HEADERS,
      });
    }

    const body = await req.json().catch(() => ({}));
    const intakeId = body.intake_id as string;
    const decision = body.decision as string; // "subscribe" | "consult"

    if (!intakeId || !["subscribe", "consult"].includes(decision)) {
      return new Response(
        JSON.stringify({ error: "intake_id and valid decision are required" }),
        {
          status: 400,
          headers: {
            ...CORS_HEADERS,
            "Content-Type": "application/json",
          },
        },
      );
    }

    // 2️⃣ Load intake
    const { data: intake, error: readErr } = await supabase
      .from("ai_intake_requests")
      .select("*")
      .eq("id", intakeId)
      .single();

    if (readErr || !intake) {
      console.error("Decision read error", readErr);
      throw new Error("Intake not found");
    }

    // 3️⃣ Update intake row
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

    // 4️⃣ Optional webhook
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

    // 5️⃣ Return success WITH CORS
    return new Response(JSON.stringify({ ok: true }), {
      status: 200,
      headers: {
        ...CORS_HEADERS,
        "Content-Type": "application/json",
      },
    });

  } catch (err) {
    console.error("ai-intake-decision error", err);
    return new Response(
      JSON.stringify({ error: err.message ?? "Unknown error" }),
      {
        status: 500,
        headers: {
          ...CORS_HEADERS,
          "Content-Type": "application/json",
        },
      },
    );
  }
});
