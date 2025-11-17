// supabase/functions/ai-intake/index.ts
import { createClient } from "https://esm.sh/@supabase/supabase-js@2";

const SUPABASE_URL = Deno.env.get("SUPABASE_URL")!;
const SUPABASE_SERVICE_ROLE_KEY = Deno.env.get("SUPABASE_SERVICE_ROLE_KEY")!;
const OPENAI_API_KEY = Deno.env.get("OPENAI_API_KEY")!;

const supabase = createClient(SUPABASE_URL, SUPABASE_SERVICE_ROLE_KEY);

interface IntakePayload {
  goal: string;
  workflow_description: string;
  tools?: string | null;
  pain_points?: string | null;
  email?: string | null;
  meta?: Record<string, unknown>;
}

Deno.serve(async (req) => {
  try {
    if (req.method !== "POST") {
      return new Response("Method not allowed", { status: 405 });
    }

    const body = (await req.json()) as Partial<IntakePayload>;

    if (!body.goal || !body.workflow_description) {
      return new Response(
        JSON.stringify({ error: "goal and workflow_description are required" }),
        { status: 400, headers: { "Content-Type": "application/json" } },
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

    // 1) Insert intake row
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

    // 2) Ask OpenAI for a structured blueprint
    const systemPrompt = `
You are an AI workflow architect helping a small business owner.
Return a JSON object with keys: summary, blueprint_markdown, blueprint_json, opportunities, risks, suggested_tools, estimated_time_saved.

- summary: 2–3 sentence overview of the workflow and gains.
- blueprint_markdown: Markdown with headings and steps (easy to show in a web page).
- blueprint_json: JSON structure of the workflow (stages, steps, tools).
- opportunities: bullet list (plain text) of extra ideas.
- risks: bullet list (plain text) of gotchas / failure modes.
- suggested_tools: bullet list of concrete tools or automations.
- estimated_time_saved: short text estimate (e.g. "2–3 hours per week").
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
      // model should return raw JSON text
      parsed = JSON.parse(content);
    } catch (_e) {
      console.error("Failed to parse AI JSON, content:", content);
      throw new Error("AI returned invalid JSON");
    }

    const summary = parsed.summary ?? "";
    const blueprintMarkdown = parsed.blueprint_markdown ?? "";
    const blueprintJson = parsed.blueprint_json ?? null;
    const opportunities = parsed.opportunities ?? "";
    const risks = parsed.risks ?? "";
    const suggestedTools = parsed.suggested_tools ?? "";
    const estimatedTimeSaved = parsed.estimated_time_saved ?? "";

    // 3) Store blueprint
    const { error: bpErr } = await supabase.from("ai_workflow_blueprints")
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

    // 4) update intake status
    await supabase.from("ai_intake_requests")
      .update({ status: "awaiting_decision" })
      .eq("id", intakeId);

    // 5) return to frontend
    const responseBody = {
      intake_id: intakeId,
      summary,
      blueprint_markdown: blueprintMarkdown,
      opportunities,
      risks,
      suggested_tools: suggestedTools,
      estimated_time_saved: estimatedTimeSaved,
    };

    return new Response(JSON.stringify(responseBody), {
      status: 200,
      headers: { "Content-Type": "application/json" },
    });
  } catch (err) {
    console.error("ai-intake error", err);
    return new Response(
      JSON.stringify({ error: (err as Error).message ?? "Unknown error" }),
      { status: 500, headers: { "Content-Type": "application/json" } },
    );
  }
});
