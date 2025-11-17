// supabase/functions/ai-intake/index.ts
import { createClient } from "https://esm.sh/@supabase/supabase-js@2";

const SUPABASE_URL = Deno.env.get("SUPABASE_URL")!;
const SUPABASE_SERVICE_ROLE_KEY = Deno.env.get("SUPABASE_SERVICE_ROLE_KEY")!;
const OPENAI_API_KEY = Deno.env.get("OPENAI_API_KEY")!;

const supabase = createClient(SUPABASE_URL, SUPABASE_SERVICE_ROLE_KEY);

// 🔥 Add CORS once at the top
const CORS_HEADERS = {
  "Access-Control-Allow-Origin": "https://mgrnz.com",       // your domain
  "Access-Control-Allow-Headers":
    "authorization, x-client-info, apikey, content-type",
  "Access-Control-Allow-Methods": "POST, OPTIONS",
  "Access-Control-Max-Age": "86400",
};

interface IntakePayload {
  goal: string;
  workflow_description: string;
  tools?: string | null;
  pain_points?: string | null;
  email?: string | null;
  meta?: Record<string, unknown>;
}

Deno.serve(async (req) => {
  // 🔥 REQUIRED: Allow browser preflight
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

    const body = (await req.json()) as Partial<IntakePayload>;

    if (!body.goal || !body.workflow_description) {
      return new Response(
        JSON.stringify({
          error: "goal and workflow_description are required",
        }),
        {
          status: 400,
          headers: {
            ...CORS_HEADERS,
            "Content-Type": "application/json",
          },
        },
      );
    }

    const payload: IntakePayload = {
      goal: body.goal.trim(),
      workflow_description: body.workflow_description.trim(),
      tools: body.tools?.trim() || null,
      pain_points: body.pain_points?.trim() || null,
      email: body.email?.trim() || null,
      meta: body.meta || {},
    };

    // ---------------------------
    // 1) Insert intake row
    // ---------------------------
    const { data: intakeRow, error: intakeErr } = await supabase
      .from("ai_intake_requests")
      .insert({
        goal: payload.goal,
        workflow_description: payload.workflow_description,
        tools: payload.tools,
        pain_points: payload.pain_points,
        email: payload.email,
        status: "draft",
        meta: payload.meta,
      })
      .select()
      .single();

    if (intakeErr || !intakeRow) {
      console.error("Intake insert error", intakeErr);
      throw new Error("Failed to save intake");
    }

    const intakeId = intakeRow.id as string;

    // ---------------------------
    // 2) Generate AI blueprint
    // ---------------------------
    const systemPrompt = `
You are an AI workflow architect helping a small business owner.
Return a JSON object with: summary, blueprint_markdown, blueprint_json, opportunities, risks, suggested_tools, estimated_time_saved.
`;

    const userPrompt = `
Business goal: ${payload.goal}

Current workflow:
${payload.workflow_description}

Tools:
${payload.tools || "Not specified"}

Pain points:
${payload.pain_points || "Not specified"}
`;

    const oaRes = await fetch("https://api.openai.com/v1/chat/completions", {
      method: "POST",
      headers: {
        "Authorization": `Bearer ${OPENAI_API_KEY}`,
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        model: "gpt-4.1-mini",
        messages: [
          { role: "system", content: systemPrompt },
          { role: "user", content: userPrompt },
        ],
        temperature: 0.4,
      }),
    });

    if (!oaRes.ok) {
      const errText = await oaRes.text();
      console.error("OpenAI error", oaRes.status, errText);
      throw new Error("AI generation failed");
    }

    const oaJson = await oaRes.json();
    const content = oaJson.choices?.[0]?.message?.content;

    let parsed: any;
    try {
      parsed = JSON.parse(content);
    } catch (_e) {
      console.error("AI returned non-JSON content:", content);
      throw new Error("AI returned invalid JSON");
    }

    const summary = parsed.summary ?? "";
    const blueprintMarkdown = parsed.blueprint_markdown ?? "";
    const blueprintJson = parsed.blueprint_json ?? null;
    const opportunities = parsed.opportunities ?? "";
    const risks = parsed.risks ?? "";
    const suggestedTools = parsed.suggested_tools ?? "";
    const estimatedTimeSaved = parsed.estimated_time_saved ?? "";

    // ---------------------------
    // 3) Store blueprint
    // ---------------------------
    const { error: bpErr } = await supabase
      .from("ai_workflow_blueprints")
      .insert({
        intake_id: intakeId,
        summary,
        blueprint_markdown: blueprintMarkdown,
        blueprint_json: blueprintJson,
        opportunities,
        risks,
        suggested_tools: suggestedTools,
        estimated_time_saved: estimatedTimeSaved,
      });

    if (bpErr) {
      console.error("Blueprint insert error", bpErr);
      throw new Error("Failed to save blueprint");
    }

    // ---------------------------
    // 4) Update intake status
    // ---------------------------
    await supabase
      .from("ai_intake_requests")
      .update({ status: "awaiting_decision" })
      .eq("id", intakeId);

    // ---------------------------
    // 5) Return to the frontend
    // ---------------------------
    return new Response(
      JSON.stringify({
        intake_id: intakeId,
        summary,
        blueprint_markdown: blueprintMarkdown,
        opportunities,
        risks,
        suggested_tools: suggestedTools,
        estimated_time_saved: estimatedTimeSaved,
      }),
      {
        status: 200,
        headers: {
          ...CORS_HEADERS,
          "Content-Type": "application/json",
        },
      },
    );
  } catch (err) {
    console.error("ai-intake error", err);
    return new Response(JSON.stringify({ error: err.message }), {
      status: 500,
      headers: {
        ...CORS_HEADERS,
        "Content-Type": "application/json",
      },
    });
  }
});
