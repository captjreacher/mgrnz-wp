<?php
/**
 * Plugin Name: MGRNZ AI Workflow Endpoint
 * Description: Receives wizard submissions from /start-using-ai and logs/returns JSON.
 * Author: MGRNZ
 * Version: 0.1.0
 */

add_action('rest_api_init', function () {
    register_rest_route('mgrnz/v1', '/ai-workflow', [
        'methods'  => 'POST',
        'permission_callback' => '__return_true',
        'callback' => function (WP_REST_Request $request) {

            $data = $request->get_json_params();

            if (!empty($data)) {
                error_log('[AI WORKFLOW] ' . json_encode($data));
            }

            return new WP_REST_Response([
                'status'  => 'ok',
                'message' => 'Workflow brief received.',
            ], 200);
        },
    ]);
});
