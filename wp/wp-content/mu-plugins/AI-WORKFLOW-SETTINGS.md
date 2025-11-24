# AI Workflow Settings Configuration

This document explains how to configure the AI Workflow Wizard settings.

## Accessing Settings

1. Log in to WordPress admin
2. Navigate to **Settings > AI Workflow**
3. Configure your AI provider and credentials

## Configuration Options

### AI Provider Configuration

#### AI Provider
Select your preferred AI service provider:
- **OpenAI**: Uses GPT models (GPT-4, GPT-4 Turbo, GPT-3.5 Turbo)
- **Anthropic**: Uses Claude models (Claude 3 Opus, Sonnet, Haiku)

#### API Key
Enter your API key from your chosen provider:
- **OpenAI**: Get your key at https://platform.openai.com/api-keys
- **Anthropic**: Get your key at https://console.anthropic.com/settings/keys

**Security Note**: API keys are stored securely in the WordPress database. Never share your API keys.

#### AI Model
Select the specific model to use for blueprint generation:
- More powerful models (GPT-4, Claude 3 Opus) provide better results but cost more
- Faster models (GPT-3.5 Turbo, Claude 3 Haiku) are more economical

### Advanced Settings

#### Max Tokens
- Controls the maximum length of generated blueprints
- Range: 500-4000 tokens
- Default: 2000 tokens
- Higher values allow longer, more detailed blueprints

#### Temperature
- Controls creativity vs. consistency in AI responses
- Range: 0.0-1.0
- Default: 0.7
- Lower values (0.3): More focused and consistent
- Higher values (0.9): More creative and varied

## Environment Variables (Optional)

For enhanced security or multi-environment setups, you can use environment variables instead of storing settings in the database:

```bash
# AI Provider Configuration
MGRNZ_AI_PROVIDER=openai
MGRNZ_AI_API_KEY=your-api-key-here
MGRNZ_AI_MODEL=gpt-4
MGRNZ_AI_MAX_TOKENS=2000
MGRNZ_AI_TEMPERATURE=0.7

# Feature Flags
MGRNZ_ENABLE_CACHE=true
MGRNZ_ENABLE_EMAILS=true

# Rate Limiting
MGRNZ_RATE_LIMIT=3
```

Add these to your `.env` file or server environment configuration. Environment variables take precedence over WordPress options.

## Testing Connection

After configuring your settings:

1. Click the **Test Connection** button
2. Wait for the test to complete
3. A success message confirms your configuration is working
4. An error message indicates what needs to be fixed

Common test failures:
- **Invalid API key**: Check that you copied the key correctly
- **Rate limit exceeded**: Wait a few minutes and try again
- **Connection timeout**: Check your server's internet connectivity

## Configuration File

The system also uses a configuration file at `mu-plugins/config/ai-workflow-config.php` that defines default values and feature flags. This file is loaded automatically and doesn't require manual editing.

## Troubleshooting

### Settings Not Saving
- Ensure you have administrator privileges
- Check for JavaScript errors in browser console
- Verify WordPress file permissions

### API Connection Fails
- Verify API key is correct and active
- Check that your server can make outbound HTTPS requests
- Ensure you have sufficient API credits/quota

### Wrong Model Options Showing
- The model dropdown updates based on selected provider
- Save settings after changing provider to see correct models

## Security Best Practices

1. **Never commit API keys to version control**
2. Use environment variables for production deployments
3. Regularly rotate API keys
4. Monitor API usage and costs
5. Restrict WordPress admin access to trusted users only

## Support

For issues or questions about AI Workflow settings, contact the development team or refer to the main documentation.
