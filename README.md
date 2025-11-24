# mgrnz WordPress Site

Modern WordPress site built with Next.js, featuring a public homepage with subscription, and a secure admin console for content management.

## Project Overview

### Features

#### Public Homepage
- Header with logo and navigation
- Featured content sections
- Sidebar with subscription signup
- Settings button linking to admin console
- Responsive design for all devices

#### Admin Console
- **Authentication:** Secure login with Supabase (default: mike@mgrnz.com / admin)
- **Post Management:** Create, edit, delete blog and social media posts
- **Scheduling:** Schedule posts for future publication
- **User Management:** Add and manage team members with role-based access
- **Social Integrations:** Connect/manage MailerLite, GitHub, Twitter, LinkedIn
- **Diagnostics:** System health monitoring and status checks

### Technology Stack

- **Framework:** Next.js 16 (App Router)
- **Styling:** Tailwind CSS v4
- **Database:** Supabase (jqfodlzcsgfocyuawzyx)
- **Authentication:** Supabase Auth
- **UI Components:** shadcn/ui
- **Deployment:** GitHub Pages
- **CI/CD:** GitHub Actions

## Getting Started

### Prerequisites

- Node.js 18+
- npm or yarn
- Git
- **For WordPress Local Development:**
  - PHP 8.2+
  - MySQL 8.0+ or MariaDB 10.6+
  - Local WordPress environment (Local by Flywheel, XAMPP, or Docker)
  - Composer (recommended, for dependency management)

### Installation

#### Next.js Frontend Setup

1. Clone repository:
\`\`\`bash
git clone https://github.com/yourusername/mgrnz-blog.git
cd mgrnz-blog
\`\`\`

2. Checkout wordpress branch:
\`\`\`bash
git checkout wordpress
\`\`\`

3. Install dependencies:
\`\`\`bash
npm install
\`\`\`

4. Set up environment variables (.env.local):
\`\`\`
NEXT_PUBLIC_SUPABASE_URL=https://jqfodlzcsgfocyuawzyx.supabase.co
NEXT_PUBLIC_SUPABASE_ANON_KEY=[your-anon-key]
\`\`\`

5. Start development server:
\`\`\`bash
npm run dev
\`\`\`

6. Open browser to `http://localhost:3000`

#### WordPress Local Development Setup

The MGRNZ site uses WordPress as the backend, hosted on Spaceship.com in production.

**📚 Complete Documentation:** See [LOCAL_DEV_DEPLOYMENT_GUIDE.md](LOCAL_DEV_DEPLOYMENT_GUIDE.md) for comprehensive setup and deployment instructions.

**Quick Start:**

##### 1. Install Local WordPress Environment

**Option A: Local by Flywheel (Recommended for Windows)**
1. Download and install [Local by Flywheel](https://localwp.com/)
2. Create a new site:
   - Site name: `mgrnz`
   - Local domain: `mgrnz.local`
   - PHP version: 8.2+
   - Web server: Nginx or Apache
   - Database: MySQL 8.0+

**Option B: Docker**
\`\`\`bash
# Use official WordPress Docker image
docker run -d -p 8080:80 --name mgrnz-local \
  -e WORDPRESS_DB_HOST=mysql \
  -e WORDPRESS_DB_NAME=mgrnz_local \
  -e WORDPRESS_DB_USER=root \
  -e WORDPRESS_DB_PASSWORD=root \
  wordpress:latest
\`\`\`

**Option C: XAMPP**
1. Download and install [XAMPP](https://www.apachefriends.org/)
2. Start Apache and MySQL
3. Download WordPress and extract to `htdocs/mgrnz`

##### 2. Configure Local Environment

1. **Copy the environment template:**
   - A `.env.local` file has been created in the repository root
   - Update the values to match your local setup:

\`\`\`env
# Database Configuration
DB_NAME=mgrnz_local
DB_USER=root
DB_PASSWORD=root
DB_HOST=localhost

# WordPress URLs
WP_HOME=http://mgrnz.local
WP_SITEURL=http://mgrnz.local

# Supabase (use local or test project)
SUPABASE_URL=http://localhost:54321
MGRNZ_WEBHOOK_URL=http://localhost:54321/functions/v1/wp-sync
MGRNZ_WEBHOOK_SECRET=local-test-secret

# Third-party (use test credentials)
MAILERLITE_API_KEY=test-key-local
ML_INTAKE_GROUP_ID=test-group
\`\`\`

2. **Install PHP dependencies (recommended):**
   \`\`\`bash
   # Install Composer if not already installed
   # Download from: https://getcomposer.org/download/
   
   # Install dependencies
   composer install
   \`\`\`
   
   Note: If Composer is not available, the system will use a fallback .env parser.

3. **Set up WordPress configuration:**
   - The repository includes `wp-config-local.php` for local development
   - This file loads environment variables from `.env.local`
   - Copy or symlink this file to your WordPress installation:

\`\`\`bash
# If using Local by Flywheel
cp wp-config-local.php "C:/Users/YourName/Local Sites/mgrnz/app/public/wp-config.php"

# Or create a symlink (requires admin privileges on Windows)
mklink "C:/Users/YourName/Local Sites/mgrnz/app/public/wp-config.php" wp-config-local.php
\`\`\`

4. **Run the environment setup script (optional):**
   \`\`\`powershell
   # Verify your environment configuration
   .\setup-environment.ps1
   \`\`\`

5. **Test your environment:**
   \`\`\`bash
   # Run the test script to verify configuration
   php test-environment.php
   \`\`\`

For detailed information about the environment configuration system, see [ENVIRONMENT_SETUP.md](ENVIRONMENT_SETUP.md).

3. **Generate security keys:**
   - Visit https://api.wordpress.org/secret-key/1.1/salt/
   - Copy the generated keys
   - Update the security key values in `.env.local`

##### 3. Install WordPress

1. Access your local site in a browser:
   - Local by Flywheel: `http://mgrnz.local`
   - Docker: `http://localhost:8080`
   - XAMPP: `http://localhost/mgrnz`

2. Complete the WordPress installation:
   - Site title: `MGRNZ`
   - Admin username: `admin`
   - Admin password: (choose a secure password)
   - Admin email: `mike@mgrnz.com`

3. Install required plugins:
   - Navigate to Plugins → Add New
   - Install any custom plugins from `wp-content/plugins/`

4. Install custom theme:
   - Copy theme files to `wp-content/themes/`
   - Activate the theme in Appearance → Themes

##### 4. Set Up Local Supabase (Optional)

For testing Supabase edge functions locally:

1. **Install Supabase CLI:**
\`\`\`bash
npm install -g supabase
\`\`\`

2. **Install Docker Desktop:**
   - Download from [docker.com](https://www.docker.com/products/docker-desktop)
   - Required for local Supabase development

3. **Start local Supabase:**
\`\`\`bash
supabase start
\`\`\`

4. **Deploy edge functions locally:**
\`\`\`bash
supabase functions serve
\`\`\`

5. **Update `.env.local` with local Supabase URLs:**
\`\`\`env
SUPABASE_URL=http://localhost:54321
MGRNZ_WEBHOOK_URL=http://localhost:54321/functions/v1/wp-sync
\`\`\`

**Alternative:** Use a separate Supabase test project instead of local Docker setup.

##### 5. Verify Local Setup

1. **Check WordPress:**
   - Visit your local site URL
   - Verify the homepage loads
   - Log in to wp-admin

2. **Check environment variables:**
   - In wp-admin, go to Tools → Site Health
   - Verify WP_ENVIRONMENT_TYPE shows "local"
   - Check that debug mode is enabled

3. **Test webhook integration:**
   - Create a test post
   - Verify webhook is sent to local Supabase (check edge function logs)

##### 6. Pull Production Data (Optional)

To work with production content locally:

\`\`\`powershell
# Pull database and files from production
.\pull-from-production.ps1
\`\`\`

This script will:
- Export production database
- Import to local environment
- Replace production URLs with local URLs
- Download themes, plugins, and uploads

##### Troubleshooting Local Setup

**Database connection errors:**
- Verify MySQL/MariaDB is running
- Check database credentials in `.env.local`
- Ensure database `mgrnz_local` exists

**URL issues:**
- Run: `wp search-replace 'https://mgrnz.com' 'http://mgrnz.local' --all-tables`
- Clear browser cache
- Check WP_HOME and WP_SITEURL in `.env.local`

**Supabase webhook not working:**
- Verify Supabase CLI is running: `supabase status`
- Check Docker is running
- Test edge function directly: `curl http://localhost:54321/functions/v1/wp-sync`

**File permissions:**
- Ensure wp-content directory is writable
- On Windows: Right-click → Properties → Security → Edit
- On Linux/Mac: `chmod -R 755 wp-content`

## Usage

### Public Site

- Navigate to homepage
- Browse featured content
- Click Subscribe to join newsletter
- Click Settings to access admin

### Admin Console

1. Click Settings button on homepage
2. Log in with credentials:
   - Email: `mike@mgrnz.com`
   - Password: `admin`
3. Manage content from admin dashboard

#### Posts
- Create blog posts with title and content
- Create social media posts (280 char limit)
- Edit post status (draft/published/scheduled)
- Delete posts

#### Scheduling
- Schedule posts for future publication
- Set specific date and time
- Cancel scheduled posts

#### Users
- Add team members with roles
- Manage user permissions
- Remove users

#### Integrations
- View connected services
- Connect/disconnect integrations
- Manage API keys

#### Diagnostics
- Monitor system health
- View service status
- Check backup status

## Development

### Available Scripts

\`\`\`bash
npm run dev        # Start development server
npm run build      # Build for production
npm start          # Start production server
npm run lint       # Run linting
npm run test       # Run tests
\`\`\`

### Project Structure

\`\`\`
mgrnz-blog/
├── app/
│   ├── layout.tsx           # Root layout
│   ├── page.tsx             # Homepage
│   └── admin/
│       ├── layout.tsx       # Admin layout
│       └── page.tsx         # Admin console
├── components/
│   ├── ui/                  # shadcn/ui components
│   ├── admin/               # Admin panel components
│   ├── login-form.tsx       # Login component
│   └── admin-dashboard.tsx  # Dashboard component
├── lib/
│   ├── supabase-client.ts  # Supabase utilities
│   └── types.ts            # TypeScript types
├── public/                  # Static assets
├── __tests__/              # Test files
└── .github/workflows/      # CI/CD workflows
\`\`\`

## Testing

### Unit Tests
\`\`\`bash
npm run test
\`\`\`

Tests cover:
- Authentication flows
- Post CRUD operations
- User management
- Data validation

### Integration Tests

Follow [INTEGRATION_TESTING.md](INTEGRATION_TESTING.md) for end-to-end test scenarios.

### Supabase Local Testing

For testing WordPress + Supabase edge functions locally:

**Quick Start:**
1. Install Docker Desktop and Supabase CLI
2. Start Supabase: `supabase start`
3. Deploy functions: `supabase functions deploy`
4. Serve functions: `supabase functions serve`
5. Test configuration: `php test-supabase-config.php`

**Documentation:**
- [Quick Start Guide](./supabase/QUICK_START.md) - 5-minute setup
- [Full Setup Guide](./supabase/LOCAL_DEVELOPMENT.md) - Comprehensive documentation
- [Testing Guide](./SUPABASE_TESTING_GUIDE.md) - Testing workflows and troubleshooting

**Test webhook integration:**
```powershell
# Monitor edge function logs
supabase functions logs wp-sync --follow

# Publish a post in WordPress and verify webhook is received
```

## Deployment

### Deployment Configuration

The project uses a centralized deployment configuration file (`deployment-config.json`) that defines:
- Environment-specific settings (production, staging)
- Remote and local path configurations
- File exclusion patterns
- Backup settings
- Transfer options and retry logic
- Safety checks and verification

See [DEPLOYMENT_CONFIG.md](DEPLOYMENT_CONFIG.md) for complete configuration documentation.

### Automated Deployment

1. Push to `wordpress` branch
2. GitHub Actions workflow triggers
3. Tests run automatically
4. Site builds and deploys to GitHub Pages

### Manual Deployment

See [DEPLOYMENT.md](DEPLOYMENT.md) for detailed deployment instructions.

### Deployment Scripts

The project includes PowerShell scripts for WordPress deployment:

```powershell
# Deploy to production
.\scripts\deploy.ps1 -Environment production

# Pull from production to local
.\scripts\pull-from-production.ps1

# Push files to production
.\scripts\file-push.ps1 -Environment production

# Pull files from production
.\scripts\file-pull.ps1 -Environment production

# Test connection
.\scripts\test-connection.ps1 -Environment production
```

For detailed script documentation, see [scripts/README.md](scripts/README.md).

## Integrations

### Supabase
- Authentication system
- User and post data storage
- Real-time updates

### MailerLite
- Newsletter subscription
- Email campaigns
- Subscriber management

### GitHub
- Version control
- Automated workflows
- Deployment pipeline

## Documentation

### Complete Guides

| Guide | Description |
|-------|-------------|
| [LOCAL_DEV_DEPLOYMENT_GUIDE.md](LOCAL_DEV_DEPLOYMENT_GUIDE.md) | **Main guide** - Complete local development and deployment workflow |
| [TROUBLESHOOTING.md](TROUBLESHOOTING.md) | Comprehensive troubleshooting for all common issues |
| [WORKFLOW_BEST_PRACTICES.md](WORKFLOW_BEST_PRACTICES.md) | Best practices for development, deployment, and maintenance |
| [ENVIRONMENT_SETUP.md](ENVIRONMENT_SETUP.md) | Detailed environment configuration guide |
| [ENVIRONMENT_QUICK_START.md](ENVIRONMENT_QUICK_START.md) | Quick reference for environment setup |

### Deployment Documentation

| Document | Description |
|----------|-------------|
| [scripts/README.md](scripts/README.md) | Complete guide to all deployment scripts |
| [DEPLOYMENT_CONFIG.md](DEPLOYMENT_CONFIG.md) | Deployment configuration reference |
| [scripts/LOGGING.md](scripts/LOGGING.md) | Logging system documentation |
| [DEPLOYMENT.md](DEPLOYMENT.md) | General deployment procedures |

### Supabase Documentation

| Document | Description |
|----------|-------------|
| [supabase/QUICK_START.md](supabase/QUICK_START.md) | 5-minute Supabase local setup |
| [supabase/LOCAL_DEVELOPMENT.md](supabase/LOCAL_DEVELOPMENT.md) | Complete Supabase development guide |
| [supabase/TESTING_EDGE_FUNCTIONS.md](supabase/TESTING_EDGE_FUNCTIONS.md) | Edge function testing guide |
| [SUPABASE_TESTING_GUIDE.md](SUPABASE_TESTING_GUIDE.md) | Comprehensive testing guide |

### Quick Links

- **Getting Started:** [LOCAL_DEV_DEPLOYMENT_GUIDE.md](LOCAL_DEV_DEPLOYMENT_GUIDE.md#quick-start)
- **Common Issues:** [TROUBLESHOOTING.md](TROUBLESHOOTING.md)
- **Deployment:** [LOCAL_DEV_DEPLOYMENT_GUIDE.md](LOCAL_DEV_DEPLOYMENT_GUIDE.md#deployment-workflows)
- **Best Practices:** [WORKFLOW_BEST_PRACTICES.md](WORKFLOW_BEST_PRACTICES.md)

## Configuration

### GitHub Pages
- Enable GitHub Pages in repository settings
- Set source to `Deploy from a branch`
- Select `wordpress` branch

### Supabase
- Project ID: `jqfodlzcsgfocyuawzyx`
- URL: `https://jqfodlzcsgfocyuawzyx.supabase.co`
- Auth method: Email/Password

## Security

- Admin area requires authentication
- Credentials stored securely
- CORS protection enabled
- Environment variables for secrets
- Row-Level Security on database

## Performance

- Homepage load time: < 2 seconds
- Admin dashboard: < 1.5 seconds
- Optimized images and bundle
- Code splitting for faster loads

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Known Issues

1. MailerLite integration is placeholder (script to be provided)
2. Scheduling uses localStorage in dev (implement server persistence)
3. Supabase uses demo credentials (update for production)

## Future Enhancements

- [ ] Real-time post updates
- [ ] Advanced analytics
- [ ] Multi-language support
- [ ] Dark mode toggle
- [ ] Mobile app companion
- [ ] SEO optimization
- [ ] Backup automation

## Contributing

1. Create feature branch: `git checkout -b feature/feature-name`
2. Make changes
3. Run tests: `npm run test`
4. Push to GitHub
5. Create Pull Request to `wordpress` branch

## License

MIT License - feel free to use for any purpose

## Support

For issues or questions:
- GitHub Issues: [Repository Issues]
- Email: mike@mgrnz.com
- Docs: [INTEGRATION_TESTING.md](INTEGRATION_TESTING.md), [DEPLOYMENT.md](DEPLOYMENT.md)

## Version History

### v1.0.0 (Current)
- Initial WordPress site launch
- Homepage with subscription
- Admin console with post management
- GitHub Actions automation
- Unit and integration tests

---

**Last Updated:** January 2025
**Status:** Ready for Production
**Branch:** wordpress
#   D e p l o y m e n t   t e s t  
 #   D e p l o y   t e s t  
 #   D e p l o y   w i t h   S S H  
 #   D e p l o y   w i t h   S S H  
 #   D e p l o y   w i t h   S S H  
 #   D e p l o y   w i t h   S S H  
 #   D e p l o y   w i t h   S S H  
 #   T e s t  
 #   D e p l o y   w i t h   S S H  
 #   D e p l o y   w i t h   S S H  
 #   T e s t  
 #   T e s t  
 #   T e s t  
 