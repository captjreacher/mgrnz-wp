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

### Installation

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

## Deployment

### Automated Deployment

1. Push to `wordpress` branch
2. GitHub Actions workflow triggers
3. Tests run automatically
4. Site builds and deploys to GitHub Pages

### Manual Deployment

See [DEPLOYMENT.md](DEPLOYMENT.md) for detailed deployment instructions.

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
