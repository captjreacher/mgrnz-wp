# MGRNZ — WordPress Canonical Setup: Status Update
Date: 2025-11-05
Owner: Mike G Robinson (MGRNZ / Maximised AI)
Repo: mgrnz-wp
Environment: Supabase + Headless WordPress (Spaceship)

---

## 1) Executive Summary
- Canonical WordPress remains the source of truth; Edge Functions & webhooks are in place to mirror content.
- Supabase project linked and functions are active; recent redeploy confirms working pipeline.
- Next critical path: Finalise ACF REST exposure, confirm webhook receivers + loop-guard, and run end-to-end QA (publish → mirror).

## 2) Environment Snapshot
- Supabase CLI: confirmed; deploy working.
- Linked project: jqfodlzcsgfocyuwazyx (active).
- Edge Functions (active):
  - schedule-post — v12 — 2025-10-30 23:58 UTC
  - subscribe — v2 — 2025-11-02 10:40 UTC
  - mailerlite-webhook — v7 — 2025-11-03 18:57 UTC
  - wp-sync — v1 — 2025-11-05 15:15 UTC
  - ml-to-hugo — redeployed successfully (latest deployment verified)

Note: Local 'supabase functions serve' requires Docker. Not needed for cloud deploys.

## 3) Spec Compliance (v1.1)

Area | Status | Notes
---|---|---
Environment Baseline | Partial | Confirm PHP ≥8.2, WP ≥6.4, HTTPS, and minimal/headless theme active.
Required Plugins | Partial | ACF Pro, SEO (Yoast/RankMath), WP Webhooks Pro, Media regen tool.
Auth & Security | Partial | App Passwords/JWT set; verify secrets stored in Supabase env (WP_USER, WP_APP_PASS, WP_API_BASE).
REST API Routes | Defined | /wp-json/wp/v2/posts, media endpoints; ensure CORS headers live.
ACF Fields | Partial | Create 'Post Meta (MGRNZ)': byline, publish_date_override, keywords, sources, block_data; enable REST.
Sync Mechanism | Partial | Outgoing webhooks (publish/update/delete) & receivers; include 'sync_origin' guard.
Writer UI (Edge) | Complete | Wire to transform block_data → HTML, upload media, post authenticated.
Media Policy | Complete | Enforce 1280×720 minimum; alt text required.
Testing Checklist | Pending | Run GET/POST, media upload, webhooks, ACF-in-REST, CORS.
Change Control | Drafted | Maintain CHANGELOG + tag spec versions.
Review & Sign-off | New | Section 11 added; execute before opening to contributors.

## 4) Risks & Mitigations
- CORS not fully applied across origins → verify snippet active; test with curl/Insomnia.
- Webhook loop risk without sync_origin guard → add guard key and receiver validation.
- ACF not in REST → blocks full content sync → ensure show_in_rest: true for the field group.

## 5) Decisions (current)
- Use App Passwords for WP publishing via Edge.
- WordPress is canonical; other sites mirror via webhooks & Supabase.
- Image handling enforces 1280×720 minimum, stored & resized on WP.

## 6) Actions This Sprint
1. ACF Group: create 'Post Meta (MGRNZ)'; toggle REST exposure.
2. Secrets: set WP_USER, WP_APP_PASS, WP_API_BASE in Supabase (project env).
3. Webhooks: implement senders (post_publish, post_update, post_delete) and receivers (Supabase Edge 'wp-sync').
4. CORS: apply headers function; validate with OPTIONS + POST from tools host.
5. E2E QA: publish two test posts (with/without featured image) → verify mirrored delivery.
6. Observability: log post/media IDs; capture webhook responses to logs.

## 7) System-Docs Review & Gaps
Known present: System-Docs/05_Archive (snapshot script provisions this).
Recommended structure (create if missing):
- 01_About/ — Project overview, glossary, stakeholders.
- 02_Architecture/ — Context diagram, data flows, component list.
- 03_Environments/ — WordPress/Supabase/Hosting inventories, versions.
- 04_Operations/ — Runbooks (backup/restore, rotate secrets, deploy).
- 05_Archive/ — Snapshots & legacy (already present).
- 06_Project-Docs/ — Status reports, plans, sprint notes (this file).
- 07_Change-Log/ — CHANGELOG.md + release notes.
- 08_Runbooks/ — Specific SOPs: WP export, image policy, webhook debug.
- 09_Security/ — Secrets map, access policy, audit checklist.
- 10_QA-Checklists/ — Review & Sign-off (UI/Content Ops), smoke tests.
- 11_Onboarding/ — Quickstart for new contributors (tools, accounts).

Create empty README.md in each and seed templates as needed.

## 8) Next Steps
- Create missing folders under System-Docs and seed README.md stubs.
- Execute Section 11 QA: field mapping, media policy, auth/roles, CORS, webhooks, observability.
- Document the webhook payload & response schema in 02_Architecture and 10_QA-Checklists.
- Automate deploys with deploy-all.ps1 and add log output to 07_Change-Log/Deploy-Log.md.

---

### Appendix A — Suggested curl probes
```bash
# CORS preflight (OPTIONS)
curl -i -X OPTIONS https://mgrnz.com/wp-json/wp/v2/posts -H "Origin: https://mgrnz.com"

# Auth probe (should 401 without creds)
curl -i https://mgrnz.com/wp-json/wp/v2/posts
```

### Appendix B — Env vars (Supabase)
- WP_USER=agent@mgrnz.com
- WP_APP_PASS=***
- WP_API_BASE=https://mgrnz.com
