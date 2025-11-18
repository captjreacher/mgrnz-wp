#!/bin/bash
# Curl-based Edge Function Testing Script
# Works on Linux, macOS, and Windows (Git Bash/WSL)

set -e

# Configuration
ENVIRONMENT="${1:-local}"
FUNCTION="${2:-all}"

if [ "$ENVIRONMENT" = "local" ]; then
    BASE_URL="http://localhost:54321/functions/v1"
    WEBHOOK_SECRET="local-test-secret"
else
    BASE_URL="https://jqfodlzcsgfocyuawzyx.supabase.co/functions/v1"
    # Load from environment or .env file
    if [ -f "supabase/.env.production" ]; then
        source supabase/.env.production
    fi
fi

# Colors
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
CYAN='\033[0;36m'
NC='\033[0m' # No Color

echo -e "${CYAN}=== Supabase Edge Function Testing ===${NC}"
echo -e "${CYAN}Environment: $ENVIRONMENT${NC}"
echo -e "${CYAN}Base URL: $BASE_URL${NC}"
echo ""

# Test wp-sync function
test_wp_sync() {
    echo -e "${CYAN}--- Testing wp-sync function ---${NC}"
    
    curl -X POST "$BASE_URL/wp-sync" \
        -H "Content-Type: application/json" \
        -H "X-Webhook-Secret: $WEBHOOK_SECRET" \
        -d @supabase/test-payloads/wp-sync.json \
        -w "\n${GREEN}Status: %{http_code}${NC}\n" \
        -s
    
    echo ""
}

# Test ml-to-hugo function
test_ml_to_hugo() {
    echo -e "${CYAN}--- Testing ml-to-hugo function ---${NC}"
    
    curl -X POST "$BASE_URL/ml-to-hugo" \
        -H "Content-Type: application/json" \
        -d @supabase/test-payloads/ml-to-hugo.json \
        -w "\n${GREEN}Status: %{http_code}${NC}\n" \
        -s
    
    echo ""
}

# Test ai-intake function
test_ai_intake() {
    echo -e "${CYAN}--- Testing ai-intake function ---${NC}"
    echo -e "${YELLOW}Note: This requires OpenAI API key to be configured${NC}"
    
    curl -X POST "$BASE_URL/ai-intake" \
        -H "Content-Type: application/json" \
        -d @supabase/test-payloads/ai-intake.json \
        -w "\n${GREEN}Status: %{http_code}${NC}\n" \
        -s
    
    echo ""
}

# Test ai-intake-decision function
test_ai_intake_decision() {
    echo -e "${CYAN}--- Testing ai-intake-decision function ---${NC}"
    echo -e "${YELLOW}Note: Update intake_id in test-payloads/ai-intake-decision.json first${NC}"
    
    curl -X POST "$BASE_URL/ai-intake-decision" \
        -H "Content-Type: application/json" \
        -d @supabase/test-payloads/ai-intake-decision.json \
        -w "\n${GREEN}Status: %{http_code}${NC}\n" \
        -s
    
    echo ""
}

# View function logs
view_logs() {
    local func_name=$1
    echo -e "${CYAN}--- Viewing logs for $func_name ---${NC}"
    
    if [ "$ENVIRONMENT" = "local" ]; then
        supabase functions logs "$func_name"
    else
        supabase functions logs "$func_name" --project-ref jqfodlzcsgfocyuawzyx
    fi
}

# Execute tests
case "$FUNCTION" in
    "wp-sync")
        test_wp_sync
        ;;
    "ml-to-hugo")
        test_ml_to_hugo
        ;;
    "ai-intake")
        test_ai_intake
        ;;
    "ai-intake-decision")
        test_ai_intake_decision
        ;;
    "all")
        test_wp_sync
        test_ml_to_hugo
        test_ai_intake
        echo -e "${YELLOW}Skipping ai-intake-decision (requires valid intake_id)${NC}"
        ;;
    "logs")
        if [ -z "$3" ]; then
            echo -e "${RED}Error: Specify function name for logs${NC}"
            echo "Usage: $0 $ENVIRONMENT logs <function-name>"
            exit 1
        fi
        view_logs "$3"
        ;;
    *)
        echo -e "${RED}Unknown function: $FUNCTION${NC}"
        echo "Usage: $0 [local|production] [wp-sync|ml-to-hugo|ai-intake|ai-intake-decision|all|logs]"
        exit 1
        ;;
esac

echo -e "${CYAN}=== Testing Complete ===${NC}"
echo ""
echo "Usage examples:"
echo "  $0 local wp-sync"
echo "  $0 production ai-intake"
echo "  $0 local all"
echo "  $0 local logs wp-sync"
