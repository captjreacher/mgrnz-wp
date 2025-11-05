# QA Checklist Template

Use this template to plan and document quality assurance activities before and after each deployment.  Each checklist should be customised to the scope of work being deployed.

## Deployment QA Checks

| Step | Purpose |
| --- | --- |
| Build & Compile | Confirm that the project builds successfully without compile errors |
| Function Deployment | Verify that each Supabase Edge Function is deployed and ACTIVE |
| API Endpoints | Test that each endpoint returns expected response codes and payloads |
| Database Migrations | Ensure the latest migrations apply cleanly and that data integrity is maintained |
| WordPress Synchronisation | Confirm posts are mirrored in WordPress with correct metadata and taxonomy |
| Images & Media | Validate that images meet size requirements (e.g. 1280×720), alt text is provided, and proxy images are generated |
| CORS & Headers | Check that cross‑origin resource sharing (CORS) headers are present and correctly configured |
| Logs & Observability | Review logs for errors and confirm metrics dashboards update appropriately |

## User Interface & Content QA

- Navigate through the user interface to ensure that all links and buttons work and that there are no broken pages
- Verify that content formatting is consistent (headlines, body text, lists) and that no markdown syntax appears in published pages
- Check that images are displayed correctly and fallback states (missing image) are handled gracefully

## Regression Checks

Identify critical paths or features that should be re‑tested to ensure they are unaffected by recent changes.  For example:

- Post creation and editing flows in the Writer UI
- Commenting, likes, or other interactive features
- Webhook triggers and any asynchronous processing

## Sign‑off

Once all checks are complete, document the date, tester, and any issues discovered.  Use this section to obtain sign‑off from stakeholders before releasing changes to production.