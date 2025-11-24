# Blueprint Caching System

## Overview

The blueprint caching system reduces AI API costs and improves response times by storing previously generated blueprints. When a user submits identical workflow information, the system returns the cached blueprint instead of making a new API call.

## How It Works

### Cache Key Generation

The system creates a unique hash based on the submission data:
- Goal
- Workflow description
- Tools
- Pain points

**Note:** Email addresses and other metadata are NOT included in the hash, so two users with identical workflow information will receive the same cached blueprint.

### Cache Storage

- **Storage Method:** WordPress transients
- **Expiration:** 7 days
- **Key Format:** `mgrnz_blueprint_{md5_hash}`

### Cache Flow

1. User submits wizard form
2. System generates hash from submission data
3. System checks for cached blueprint with matching hash
4. If found: Return cached blueprint (cache hit)
5. If not found: Call AI API, generate blueprint, cache result (cache miss)

## Cache Management

### Admin Settings

Navigate to **Settings > AI Workflow** in WordPress admin to:
- Enable/disable caching
- View cache statistics
- Clear all cached blueprints

### Cache Bypass Options

Administrators can bypass the cache for testing:

1. **WordPress Constant:**
   ```php
   define('MGRNZ_BYPASS_CACHE', true);
   ```

2. **Environment Variable:**
   ```bash
   MGRNZ_BYPASS_CACHE=true
   ```

3. **Query Parameter (admin only):**
   ```
   ?bypass_cache=1
   ```

4. **HTTP Header (admin only):**
   ```
   X-Bypass-Cache: true
   ```

### REST API Endpoints

**Get Cache Statistics (Admin Only):**
```
GET /wp-json/mgrnz/v1/ai-workflow/cache/stats
```

Response:
```json
{
  "status": "success",
  "stats": {
    "cached_blueprints": 42,
    "cache_expiration_days": 7,
    "cache_enabled": true
  }
}
```

**Clear Cache (Admin Only):**
```
POST /wp-json/mgrnz/v1/ai-workflow/cache/clear
```

Response:
```json
{
  "status": "success",
  "message": "Cleared 42 cache entries",
  "cleared_count": 42
}
```

## Benefits

### Cost Savings
- Reduces AI API calls for duplicate submissions
- Typical savings: 20-40% depending on submission patterns

### Performance
- Cached responses return in ~50ms vs ~3-5 seconds for AI generation
- Improves user experience with faster results

### Reliability
- Cached blueprints remain available even if AI service is temporarily unavailable

## Monitoring

### Log Messages

The system logs cache activity:

```
[AI WORKFLOW CACHE HIT] Key: mgrnz_blueprint_abc123... | Time: 2025-11-20 10:30:00
[AI WORKFLOW CACHE MISS] Key: mgrnz_blueprint_def456... | Time: 2025-11-20 10:31:00
[AI WORKFLOW CACHE STORED] Key: mgrnz_blueprint_def456... | Expiration: 7 days | Time: 2025-11-20 10:31:05
```

### Success Response

The API response includes a `from_cache` field:

```json
{
  "status": "success",
  "submission_id": 123,
  "blueprint": {...},
  "email_sent": true,
  "from_cache": true
}
```

## Maintenance

### When to Clear Cache

Clear the cache when:
- AI prompts are updated
- AI model is changed
- Blueprint format is modified
- Testing new features

### Cache Cleanup

WordPress automatically removes expired transients. No manual cleanup required.

## Technical Details

### Class: MGRNZ_Blueprint_Cache

**Location:** `mu-plugins/includes/class-blueprint-cache.php`

**Key Methods:**
- `get_cached_blueprint($submission_data)` - Retrieve cached blueprint
- `cache_blueprint($submission_data, $blueprint)` - Store blueprint in cache
- `generate_cache_key($submission_data)` - Create unique hash
- `should_bypass_cache()` - Check if cache should be bypassed
- `clear_all_cache()` - Remove all cached blueprints
- `get_cache_stats()` - Get cache statistics

### Integration

The caching system is integrated into the main REST endpoint:

```php
// Check cache first
$cache_service = new MGRNZ_Blueprint_Cache();
$blueprint = $cache_service->get_cached_blueprint($validated_data);

if ($blueprint !== false) {
    // Use cached blueprint
    $from_cache = true;
} else {
    // Generate new blueprint
    $ai_service = new MGRNZ_AI_Service();
    $blueprint = $ai_service->generate_blueprint($validated_data);
    
    // Cache the result
    $cache_service->cache_blueprint($validated_data, $blueprint);
    $from_cache = false;
}
```

## Future Enhancements

Potential improvements:
- Configurable cache expiration time
- Cache warming for common queries
- Cache analytics dashboard
- Per-user cache bypass preferences
- Cache versioning for prompt updates
