// supabase/functions/ai-intake/index.ts
// Edge Function v1 — intake + OpenAI blueprint + Supabase storage

import { createClient } from "https://esm.sh/@supabase/supabase-js@2.47.0";
import OpenAI from "https://esm.sh/openai@4.56.0";

// ---- ENV ----

const SUPABASE_URL = Deno.env.get("SUPABASE_URL")!;
const SUPABASE_SERVICE_ROLE_KEY = Deno.env.get("SUPABASE_SERVICE_ROLE_KEY")!;
const OPENAI_API_KEY = Deno.env.get("OPENAI_API_KEY")!;

const supabase = createClient(SUPABASE_URL, SUPABASE_SERVICE_ROLE_KEY);
const openai = new OpenAI({ apiKey: OPENAI_API_KEY });

// A default system prompt – you can override with env AI_BLUEPRINT_SYSTEM_PROMPT later
const BLUEPRINT_SYSTEM_PROMPT =
  Deno.env.get("AI_BLUEPRINT_SYSTEM_PROMPT") ??
  `You are an expert business systems & workflow architect.
You take a user's business goal and current workflow and design a practical AI-enabled workflow blueprint.

Always respond as a single JSON object with this structure:
{
  "summary": "short, human-readable summary of their situation",
  "blueprint_markdown": "markdown with headings, bullet points and clear steps",
  "blueprint_json": {
    "current_steps": [ { "step": 1, "description": "..." } ],
    "proposed_steps": [ { "step": 1, "description": "..." } ],
    "actors": [ "Role or System" ],
    "tools": [ "Tool1", "Tool2" ],
    "automation_opportunities": [ "..." ]
  },
  "opportunities": "paragraph on where AI helps most",
  "risks": "paragraph on constraints/risks",
  "suggested_tools": "comma-separated tools",
  "estimated_time_saved_minutes": 60
}

Keep it grounded, specific, and implementable.`;

// ---- TYPES ----

type IntakePayload = {
  goal?: string;
  workflow_description?: string;
  tools?: string;
  pain_points?: string;
  email?: string;
  meta?: {
    user_agent?: string;
    referer?: string;
  };
};

// ---- HANDLER ----

Deno.serve(async (req: Request): Promise<Response> => {
  if (req.method !== "POST") {
    return new Response("Method not allowed", { status: 405 });
  }

  let body: IntakePayload;
  try {
    body = await req.json();
  } catch {
    return jsonError("Invalid JSON body", 400);
  }

  const { goal, workflow_description, tools, pain_points, email, meta } = body;

  if (!goal || !workflow_description) {
    return jsonError("Missing required fields: goal, workflow_description", 400);
  }

  // 1) Insert intake as draft
  const { data: intake, error: intakeErr } = await supabase
    .from("ai_intake_requests")
    .insert({
      goal,
      workflow_description,
      tools: tools ?? null,
      pain_points: pain_points ?? null,
      email: email ?? null,
      status: "draft",
      user_agent: meta?.user_agent ?? null,
      referer: meta?.referer ?? null,
    })
    .select()
    .single();

  if (intakeErr || !intake) {
    console.error("Error inserting intake:", intakeErr);
    return jsonError("Failed to create intake record", 500);
  }

  // 2) Call OpenAI to generate workflow blueprint
  const userContext = { goal, workflow_description, tools, pain_points };

  let parsed: any;
  try {
    const completion = await openai.chat.completions.create({
      model: "gpt-4o-mini",
      temperature: 0.3,
      response_format: { type: "json_object" },
      messages: [
        { role: "system", content: BLUEPRINT_SYSTEM_PROMPT },
        {
          role: "user",
          content:
            "Here is the user workflow data in JSON:\n\n" +
            JSON.stringify(userContext, null, 2),
        },
      ],
    });

    const content = completion.choices[0]?.message?.content ?? "{}";
    parsed = JSON.parse(content);
  } catch (err) {
    console.error("OpenAI error:", err);
    // expose a bit more detail for now while we're debugging
    return jsonError(
      "Failed to generate workflow blueprint (OpenAI): " +
        (err instanceof Error ? err.message : String(err)),
      500,
    );
  }

  const summary: string = parsed.summary ?? "AI workflow summary unavailable.";
  const blueprint_markdown: string =
    parsed.blueprint_markdown ?? "No blueprint generated.";
  const blueprint_json = parsed.blueprint_json ?? null;
  const opportunities: string = parsed.opportunities ?? null;
  const risks: string = parsed.risks ?? null;
  const suggested_tools: string = parsed.suggested_tools ?? null;
  const estimated_time_saved_minutes: number | null =
    typeof parsed.estimated_time_saved_minutes === "number"
      ? parsed.estimated_time_saved_minutes
      : null;

  // 3) Store blueprint
  const { data: blueprint, error: bpErr } = await supabase
    .from("ai_workflow_blueprints")
    .insert({
      intake_id: intake.id,
      summary,
      blueprint_markdown,
      blueprint_json,
      opportunities,
      risks,
      suggested_tools,
      estimated_time_saved_minutes,
    })
    .select()
    .single();

  if (bpErr || !blueprint) {
    console.error("Error inserting blueprint:", bpErr);
    return jsonError("Failed to save workflow blueprint", 500);
  }

  // 4) Update intake status
  const { error: updErr } = await supabase
    .from("ai_intake_requests")
    .update({ status: "awaiting_decision" })
    .eq("id", intake.id);

  if (updErr) {
    console.error("Error updating intake status:", updErr);
  }

  // 5) Return to wizard (HTTP response)
  const responsePayload = {
    intake_id: intake.id,
    summary: blueprint.summary,
    blueprint_markdown: blueprint.blueprint_markdown,
    blueprint_json: blueprint.blueprint_json,
  };

  return new Response(JSON.stringify(responsePayload), {
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
