# Testing Guide for WordPress Site

## Unit Tests

Unit tests cover individual functions and components:

### Authentication Tests (`__tests__/auth.test.ts`)
- Login with correct credentials
- Login with invalid credentials
- Session management
- Logout functionality

### Post Management Tests (`__tests__/posts.test.ts`)
- Create blog posts
- Create social media posts
- Update post status
- Schedule posts
- Delete posts
- Filter posts by type/status

### User Management Tests (`__tests__/users.test.ts`)
- Add users with different roles
- Remove users
- Prevent duplicate emails
- Admin user protection

## Integration Tests

Integration tests verify multiple components working together:

### Authentication Flow
1. User logs in with credentials
2. Auth data stored in localStorage
3. User accesses admin console
4. User logs out

### Post Management Flow
1. User creates a post
2. User edits post status
3. User deletes post
4. Verify post list updates

## Running Tests

\`\`\`bash
# Run all tests
npm run test

# Run tests in watch mode
npm run test:watch

# Run tests with coverage
npm run test:coverage
\`\`\`

## Test Coverage Goals

- Authentication: 100%
- Post CRUD: 100%
- User Management: 95%
- Integration Flows: 90%
- Overall: 90%+

## Continuous Integration

Tests run automatically on:
- Pull requests to `wordpress` branch
- Pushes to `wordpress` branch
- Before deployment to GitHub Pages

Failing tests block deployment.
