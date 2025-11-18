# Requirements Document

## Introduction

This document defines the requirements for establishing a local development workflow with deployment capabilities for the MGRNZ WordPress site. The site is currently hosted on Spaceship.com with WordPress as the backend, integrated with Supabase edge functions for automation and a wizard interface. The goal is to enable safe local development with the ability to deploy changes to production when ready.

## Glossary

- **Local Environment**: The developer's local machine running WordPress, database, and frontend development server
- **Production Environment**: The live WordPress site hosted on Spaceship.com at mgrnz.com
- **Spaceship Hosting**: The hosting provider (Spaceship.com) where the production WordPress site is deployed
- **Supabase Edge Functions**: Serverless functions hosted on Supabase for automation (ai-intake, wp-sync, ml-to-hugo, mailerlite-webhook)
- **Deployment Pipeline**: The automated or manual process of transferring code and content from local to production
- **Database Sync**: The process of synchronizing database content between local and production environments
- **File Sync**: The process of synchronizing WordPress files, themes, and plugins between environments
- **Environment Isolation**: Ensuring local development does not affect production data or functionality

## Requirements

### Requirement 1

**User Story:** As a developer, I want to run the WordPress site locally, so that I can develop and test changes without affecting the live site

#### Acceptance Criteria

1. WHEN the developer runs the local setup command, THE Local Environment SHALL start WordPress with a local database connection
2. WHEN the developer accesses localhost, THE Local Environment SHALL display the WordPress site with all themes and plugins functional
3. WHILE the Local Environment is running, THE Production Environment SHALL remain unaffected by local changes
4. THE Local Environment SHALL use separate database credentials from the Production Environment
5. THE Local Environment SHALL use environment variables to distinguish between local and production configurations

### Requirement 2

**User Story:** As a developer, I want to pull the latest production database to my local environment, so that I can work with current content and data

#### Acceptance Criteria

1. WHEN the developer executes the database pull command, THE Deployment Pipeline SHALL create a backup of the production database
2. WHEN the production database backup is created, THE Deployment Pipeline SHALL download the backup to the local machine
3. WHEN the backup is downloaded, THE Deployment Pipeline SHALL import the database into the Local Environment
4. WHEN importing the database, THE Deployment Pipeline SHALL replace production URLs with local URLs
5. IF the database import fails, THEN THE Deployment Pipeline SHALL preserve the existing local database and display an error message

### Requirement 3

**User Story:** As a developer, I want to pull production files to my local environment, so that I can ensure my local setup matches the live site structure

#### Acceptance Criteria

1. WHEN the developer executes the file sync command, THE Deployment Pipeline SHALL connect to Spaceship Hosting via SFTP or FTP
2. WHEN connected to Spaceship Hosting, THE Deployment Pipeline SHALL download WordPress core files, themes, plugins, and uploads
3. WHERE selective sync is enabled, THE Deployment Pipeline SHALL download only specified directories
4. THE Deployment Pipeline SHALL preserve local configuration files such as wp-config.php during file sync
5. IF file sync fails, THEN THE Deployment Pipeline SHALL log the error and indicate which files were not synchronized

### Requirement 4

**User Story:** As a developer, I want to deploy tested changes from local to production, so that I can update the live site with new features and fixes

#### Acceptance Criteria

1. WHEN the developer executes the deployment command, THE Deployment Pipeline SHALL verify that all required files are present
2. WHEN verification passes, THE Deployment Pipeline SHALL create a backup of the production environment
3. WHEN the backup is complete, THE Deployment Pipeline SHALL upload changed files to Spaceship Hosting via SFTP or FTP
4. WHERE database changes exist, THE Deployment Pipeline SHALL provide an option to push database changes to production
5. IF deployment fails, THEN THE Deployment Pipeline SHALL provide rollback instructions and preserve the production backup

### Requirement 5

**User Story:** As a developer, I want environment-specific configurations, so that local and production environments use appropriate settings without manual changes

#### Acceptance Criteria

1. THE Local Environment SHALL load configuration from a .env.local file
2. THE Production Environment SHALL load configuration from environment variables or a .env.production file
3. WHEN switching between environments, THE Deployment Pipeline SHALL automatically apply the correct configuration
4. THE Local Environment SHALL use local Supabase project URLs for edge function testing
5. THE Production Environment SHALL use production Supabase project URLs

### Requirement 6

**User Story:** As a developer, I want to test Supabase edge functions locally, so that I can verify integrations before deploying to production

#### Acceptance Criteria

1. WHEN the developer starts the local Supabase environment, THE Local Environment SHALL run edge functions locally using Supabase CLI
2. WHEN WordPress triggers a webhook locally, THE Local Environment SHALL route the webhook to the local edge function
3. THE Local Environment SHALL use test credentials for MailerLite and other third-party integrations
4. WHERE Docker is available, THE Local Environment SHALL use Supabase local development with Docker
5. WHERE Docker is not available, THE Local Environment SHALL provide instructions for cloud-based testing

### Requirement 7

**User Story:** As a developer, I want deployment safety checks, so that I can avoid accidentally breaking the production site

#### Acceptance Criteria

1. WHEN the developer initiates deployment, THE Deployment Pipeline SHALL display a summary of changes to be deployed
2. WHEN changes are displayed, THE Deployment Pipeline SHALL require explicit confirmation before proceeding
3. BEFORE deploying, THE Deployment Pipeline SHALL verify that the production site is accessible
4. WHEN deploying database changes, THE Deployment Pipeline SHALL create a timestamped backup
5. IF critical files are missing, THEN THE Deployment Pipeline SHALL abort deployment and display an error message

### Requirement 8

**User Story:** As a developer, I want to manage Spaceship hosting credentials securely, so that sensitive information is not exposed in version control

#### Acceptance Criteria

1. THE Deployment Pipeline SHALL store Spaceship FTP/SFTP credentials in environment variables or a secure configuration file
2. THE Deployment Pipeline SHALL exclude credential files from version control via .gitignore
3. WHEN credentials are missing, THE Deployment Pipeline SHALL prompt the developer to provide them
4. THE Deployment Pipeline SHALL validate credentials before attempting file transfers
5. WHERE credential validation fails, THE Deployment Pipeline SHALL display a clear error message with troubleshooting steps
