<?php
/**
 * Diagram Generator Class
 * 
 * Generates Mermaid diagram code from blueprint text
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}

class MGRNZ_Diagram_Generator {
    
    /**
     * Generate Mermaid diagram from blueprint text
     * 
     * @param string $blueprint_text Blueprint content
     * @return array Diagram data with mermaid code and metadata
     */
    public function generate_from_blueprint($blueprint_text) {
        try {
            // Extract workflow steps from blueprint
            $steps = $this->parse_workflow_steps($blueprint_text);
            
            if (empty($steps)) {
                throw new Exception('No workflow steps found in blueprint');
            }
            
            // Generate Mermaid diagram code
            $mermaid_code = $this->create_mermaid_diagram($steps);
            
            return [
                'success' => true,
                'mermaid_code' => $mermaid_code,
                'steps_count' => count($steps),
                'diagram_type' => 'flowchart'
            ];
            
        } catch (Exception $e) {
            error_log('[Diagram Generator] Failed to generate diagram: ' . $e->getMessage());
            
            return [
                'success' => false,
                'error' => $e->getMessage(),
                'mermaid_code' => $this->get_fallback_diagram()
            ];
        }
    }
    
    /**
     * Parse workflow steps from blueprint text
     * 
     * @param string $text Blueprint content
     * @return array Array of workflow steps with labels and types
     */
    private function parse_workflow_steps($text) {
        $steps = [];
        
        // Look for implementation roadmap or step-by-step sections
        $patterns = [
            // Match numbered lists (1. Step, 2. Step, etc.)
            '/^\s*\d+\.\s+(.+?)$/m',
            // Match bullet points with action verbs
            '/^\s*[-*]\s+(.+?)$/m',
            // Match "Step X:" patterns
            '/Step\s+\d+:\s*(.+?)$/mi',
        ];
        
        foreach ($patterns as $pattern) {
            if (preg_match_all($pattern, $text, $matches)) {
                foreach ($matches[1] as $match) {
                    $step_text = trim($match);
                    
                    // Skip very short or very long matches
                    if (strlen($step_text) < 5 || strlen($step_text) > 100) {
                        continue;
                    }
                    
                    // Determine step type based on keywords
                    $type = $this->determine_step_type($step_text);
                    
                    $steps[] = [
                        'label' => $this->clean_step_label($step_text),
                        'type' => $type
                    ];
                }
                
                // If we found steps with first pattern, use those
                if (!empty($steps)) {
                    break;
                }
            }
        }
        
        // Limit to reasonable number of steps (5-10 for clarity)
        if (count($steps) > 10) {
            $steps = array_slice($steps, 0, 10);
        }
        
        // If no steps found, create generic workflow
        if (empty($steps)) {
            $steps = $this->create_generic_workflow($text);
        }
        
        return $steps;
    }
    
    /**
     * Determine step type based on content
     * 
     * @param string $text Step text
     * @return string Step type (process, decision, start, end)
     */
    private function determine_step_type($text) {
        $text_lower = strtolower($text);
        
        // Check for decision keywords
        $decision_keywords = ['if', 'whether', 'check', 'validate', 'verify', 'decide', 'choose', 'determine'];
        foreach ($decision_keywords as $keyword) {
            if (strpos($text_lower, $keyword) !== false) {
                return 'decision';
            }
        }
        
        // Check for start keywords
        $start_keywords = ['start', 'begin', 'initiate', 'trigger', 'receive'];
        foreach ($start_keywords as $keyword) {
            if (strpos($text_lower, $keyword) === 0) {
                return 'start';
            }
        }
        
        // Check for end keywords
        $end_keywords = ['complete', 'finish', 'end', 'finalize', 'send confirmation'];
        foreach ($end_keywords as $keyword) {
            if (strpos($text_lower, $keyword) !== false) {
                return 'end';
            }
        }
        
        // Default to process
        return 'process';
    }
    
    /**
     * Clean step label for diagram display
     * 
     * @param string $text Raw step text
     * @return string Cleaned label
     */
    private function clean_step_label($text) {
        // Remove markdown formatting
        $text = preg_replace('/[*_`#]/', '', $text);
        
        // Remove extra whitespace
        $text = preg_replace('/\s+/', ' ', $text);
        
        // Truncate if too long
        if (strlen($text) > 60) {
            $text = substr($text, 0, 57) . '...';
        }
        
        // Escape special characters for Mermaid
        $text = str_replace(['"', "'", '(', ')', '[', ']'], '', $text);
        
        return trim($text);
    }
    
    /**
     * Create Mermaid flowchart diagram code
     * 
     * @param array $steps Array of workflow steps
     * @return string Mermaid diagram code
     */
    private function create_mermaid_diagram($steps) {
        $mermaid = "graph TD\n";
        
        $node_id = 'A';
        $prev_node = null;
        
        foreach ($steps as $index => $step) {
            $current_node = $node_id;
            $label = $step['label'];
            $type = $step['type'];
            
            // Create node with appropriate shape
            switch ($type) {
                case 'start':
                    $mermaid .= "    {$current_node}([{$label}])\n";
                    break;
                    
                case 'end':
                    $mermaid .= "    {$current_node}([{$label}])\n";
                    break;
                    
                case 'decision':
                    $mermaid .= "    {$current_node}{{$label}}\n";
                    break;
                    
                case 'process':
                default:
                    $mermaid .= "    {$current_node}[{$label}]\n";
                    break;
            }
            
            // Connect to previous node
            if ($prev_node !== null) {
                // For decision nodes, add conditional paths
                if ($type === 'decision') {
                    $next_node = chr(ord($node_id) + 1);
                    $mermaid .= "    {$prev_node} --> {$current_node}\n";
                    
                    // Add Yes/No paths if not the last step
                    if ($index < count($steps) - 1) {
                        $mermaid .= "    {$current_node} -->|Yes| {$next_node}\n";
                        
                        // Add alternative path for No (skip to next decision or end)
                        $alt_node = chr(ord($next_node) + 1);
                        if ($index < count($steps) - 2) {
                            $mermaid .= "    {$current_node} -->|No| {$alt_node}\n";
                        }
                    }
                } else {
                    $mermaid .= "    {$prev_node} --> {$current_node}\n";
                }
            }
            
            $prev_node = $current_node;
            $node_id = chr(ord($node_id) + 1);
        }
        
        // Add styling
        $mermaid .= "\n";
        $mermaid .= "    classDef startEnd fill:#e1f5e1,stroke:#4caf50,stroke-width:2px\n";
        $mermaid .= "    classDef process fill:#e3f2fd,stroke:#2196f3,stroke-width:2px\n";
        $mermaid .= "    classDef decision fill:#fff3e0,stroke:#ff9800,stroke-width:2px\n";
        
        return $mermaid;
    }
    
    /**
     * Create generic workflow from blueprint text
     * 
     * @param string $text Blueprint content
     * @return array Generic workflow steps
     */
    private function create_generic_workflow($text) {
        // Extract key information to create a basic workflow
        $has_analysis = stripos($text, 'analysis') !== false || stripos($text, 'analyze') !== false;
        $has_automation = stripos($text, 'automat') !== false;
        $has_integration = stripos($text, 'integrat') !== false;
        $has_notification = stripos($text, 'notif') !== false || stripos($text, 'email') !== false;
        
        $steps = [
            ['label' => 'Start Workflow', 'type' => 'start']
        ];
        
        if ($has_analysis) {
            $steps[] = ['label' => 'Analyze Input Data', 'type' => 'process'];
        }
        
        $steps[] = ['label' => 'Process Request', 'type' => 'process'];
        
        if ($has_automation) {
            $steps[] = ['label' => 'Apply Automation Rules', 'type' => 'process'];
        }
        
        if ($has_integration) {
            $steps[] = ['label' => 'Integrate with Tools', 'type' => 'process'];
        }
        
        $steps[] = ['label' => 'Validate Results', 'type' => 'decision'];
        
        if ($has_notification) {
            $steps[] = ['label' => 'Send Notification', 'type' => 'process'];
        }
        
        $steps[] = ['label' => 'Complete Workflow', 'type' => 'end'];
        
        return $steps;
    }
    
    /**
     * Get fallback diagram for error cases
     * 
     * @return string Basic Mermaid diagram
     */
    private function get_fallback_diagram() {
        return "graph TD\n" .
               "    A([Start Workflow])\n" .
               "    B[Process Input]\n" .
               "    C[Apply Automation]\n" .
               "    D[Complete]\n" .
               "    A --> B\n" .
               "    B --> C\n" .
               "    C --> D\n";
    }
    
    /**
     * Render Mermaid code to SVG (placeholder for future implementation)
     * 
     * @param string $mermaid_code Mermaid diagram code
     * @return string SVG content or empty string
     */
    private function render_to_svg($mermaid_code) {
        // This would require a server-side Mermaid renderer
        // For now, we'll rely on client-side rendering with Mermaid.js
        // This method is a placeholder for potential future server-side rendering
        
        return '';
    }
}
