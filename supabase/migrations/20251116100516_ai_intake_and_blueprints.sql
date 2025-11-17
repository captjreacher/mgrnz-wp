-- Create table: ai_intake_requests
create table if not exists public.ai_intake_requests (
  id uuid primary key default gen_random_uuid(),
  created_at timestamptz not null default now(),

  goal text not null,
  workflow_description text not null,
  tools text,
  pain_points text,
  email text,

  status text not null default 'draft'
    check (status in ('draft', 'awaiting_decision', 'completed')),

  decision text
    check (decision in ('subscribe', 'consult') or decision is null),

  decided_at timestamptz,

  user_agent text,
  ip_address inet,
  referer text
);

-- Create table: ai_workflow_blueprints
create table if not exists public.ai_workflow_blueprints (
  id uuid primary key default gen_random_uuid(),
  created_at timestamptz not null default now(),

  intake_id uuid not null references public.ai_intake_requests(id) on delete cascade,

  summary text not null,
  blueprint_markdown text not null,
  blueprint_json jsonb,

  opportunities text,
  risks text,
  suggested_tools text,
  estimated_time_saved_minutes integer
);

-- Indexes
create index if not exists idx_ai_intake_status
  on public.ai_intake_requests (status);

create index if not exists idx_ai_blueprints_intake_id
  on public.ai_workflow_blueprints (intake_id);

-- Enable RLS
alter table public.ai_intake_requests enable row level security;
alter table public.ai_workflow_blueprints enable row level security;

-- RLS policies (lock everything down)
create policy "no direct client access ai_intake"
  on public.ai_intake_requests
  for all
  using (false)
  with check (false);

create policy "no direct client access ai_blueprints"
  on public.ai_workflow_blueprints
  for all
  using (false)
  with check (false);

