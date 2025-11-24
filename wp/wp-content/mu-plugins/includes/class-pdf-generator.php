<?php
/**
 * PDF Generator Class
 * 
 * Generates PDF documents for blueprint downloads
 * Uses TCPDF library for PDF generation
 */

class MGRNZ_PDF_Generator {
    
    /**
     * Generate PDF from blueprint data
     * 
     * @param array $blueprint_data Blueprint content and diagram
     * @param array $user_data User information (name, email)
     * @param string $session_id Session ID
     * @return string|WP_Error Path to generated PDF or error
     */
    public function generate_blueprint_pdf($blueprint_data, $user_data, $session_id) {
        try {
            // Check if TCPDF is available
            if (!class_exists('TCPDF')) {
                // Try to load TCPDF from WordPress or use fallback
                return $this->generate_simple_pdf($blueprint_data, $user_data, $session_id);
            }
            
            // Create new PDF document
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            
            // Set document information
            $pdf->SetCreator('MGRNZ AI Workflow Wizard');
            $pdf->SetAuthor('MGRNZ');
            $pdf->SetTitle('AI Workflow Blueprint');
            $pdf->SetSubject('Workflow Automation Blueprint');
            
            // Remove default header/footer
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            
            // Set margins
            $pdf->SetMargins(15, 15, 15);
            $pdf->SetAutoPageBreak(true, 15);
            
            // Add a page
            $pdf->AddPage();
            
            // Set font
            $pdf->SetFont('helvetica', '', 11);
            
            // Add header with branding
            $this->add_pdf_header($pdf);
            
            // Add blueprint content
            $this->add_blueprint_content($pdf, $blueprint_data);
            
            // Add diagram if available
            if (isset($blueprint_data['diagram']) && !empty($blueprint_data['diagram'])) {
                $this->add_diagram_to_pdf($pdf, $blueprint_data['diagram']);
            }
            
            // Add footer with contact info
            $this->add_pdf_footer($pdf);
            
            // Generate filename
            $filename = $this->generate_filename($session_id);
            $upload_dir = wp_upload_dir();
            $pdf_dir = $upload_dir['basedir'] . '/blueprints';
            
            // Create directory if it doesn't exist
            if (!file_exists($pdf_dir)) {
                wp_mkdir_p($pdf_dir);
            }
            
            $pdf_path = $pdf_dir . '/' . $filename;
            
            // Output PDF to file
            $pdf->Output($pdf_path, 'F');
            
            return $pdf_path;
            
        } catch (Exception $e) {
            error_log('[PDF Generator] Error: ' . $e->getMessage());
            return new WP_Error('pdf_generation_failed', 'Failed to generate PDF: ' . $e->getMessage());
        }
    }
    
    /**
     * Generate simple text-based PDF fallback
     * 
     * @param array $blueprint_data Blueprint content
     * @param array $user_data User information
     * @param string $session_id Session ID
     * @return string|WP_Error Path to generated file or error
     */
    private function generate_simple_pdf($blueprint_data, $user_data, $session_id) {
        try {
            // Generate HTML version that can be converted to PDF
            $html = $this->generate_blueprint_html($blueprint_data, $user_data);
            
            // Save as HTML file (can be converted to PDF by browser)
            $filename = $this->generate_filename($session_id, 'html');
            $upload_dir = wp_upload_dir();
            $pdf_dir = $upload_dir['basedir'] . '/blueprints';
            
            // Create directory if it doesn't exist
            if (!file_exists($pdf_dir)) {
                wp_mkdir_p($pdf_dir);
            }
            
            $file_path = $pdf_dir . '/' . $filename;
            
            // Write HTML to file
            file_put_contents($file_path, $html);
            
            return $file_path;
            
        } catch (Exception $e) {
            error_log('[PDF Generator] Fallback error: ' . $e->getMessage());
            return new WP_Error('pdf_generation_failed', 'Failed to generate document: ' . $e->getMessage());
        }
    }
    
    /**
     * Generate HTML version of blueprint
     * 
     * @param array $blueprint_data Blueprint content
     * @param array $user_data User information
     * @return string HTML content
     */
    private function generate_blueprint_html($blueprint_data, $user_data) {
        $content = $blueprint_data['content'] ?? '';
        $diagram_svg = '';
        
        // Get diagram SVG if available
        if (isset($blueprint_data['diagram']['svg'])) {
            $diagram_svg = $blueprint_data['diagram']['svg'];
        }
        
        $html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Workflow Blueprint</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #2196f3;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #2196f3;
            margin: 0;
        }
        .header p {
            color: #666;
            margin: 10px 0 0 0;
        }
        .diagram-section {
            margin: 30px 0;
            padding: 20px;
            background: #f5f5f5;
            border-radius: 8px;
        }
        .diagram-section h2 {
            color: #2196f3;
            margin-top: 0;
        }
        .content-section {
            margin: 30px 0;
        }
        .content-section h2 {
            color: #2196f3;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }
        .content-section h3 {
            color: #424242;
            margin-top: 20px;
        }
        .footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 2px solid #e0e0e0;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .footer a {
            color: #2196f3;
            text-decoration: none;
        }
        @media print {
            body {
                max-width: none;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Your AI Workflow Blueprint</h1>
        <p>Personalized automation plan generated by MGRNZ AI Workflow Wizard</p>
    </div>';
        
        // Add diagram if available
        if (!empty($diagram_svg)) {
            $html .= '
    <div class="diagram-section">
        <h2>Workflow Diagram</h2>
        ' . $diagram_svg . '
    </div>';
        }
        
        // Add content
        $html .= '
    <div class="content-section">
        <h2>Blueprint Details</h2>
        ' . $this->format_content_for_html($content) . '
    </div>
    
    <div class="footer">
        <p><strong>Generated by MGRNZ AI Workflow Wizard</strong></p>
        <p>Visit <a href="https://mgrnz.com">mgrnz.com</a> for more information</p>
        <p>Need help implementing this workflow? <a href="https://mgrnz.com/consultation">Book a consultation</a></p>
    </div>
</body>
</html>';
        
        return $html;
    }
    
    /**
     * Format markdown content for HTML
     * 
     * @param string $content Markdown content
     * @return string HTML content
     */
    private function format_content_for_html($content) {
        // Convert markdown-style formatting to HTML
        $formatted = $content;
        
        // Headers
        $formatted = preg_replace('/^### (.+)$/m', '<h4>$1</h4>', $formatted);
        $formatted = preg_replace('/^## (.+)$/m', '<h3>$1</h3>', $formatted);
        $formatted = preg_replace('/^# (.+)$/m', '<h2>$1</h2>', $formatted);
        
        // Bold
        $formatted = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $formatted);
        
        // Italic
        $formatted = preg_replace('/\*(.+?)\*/s', '<em>$1</em>', $formatted);
        
        // Lists
        $formatted = preg_replace('/^- (.+)$/m', '<li>$1</li>', $formatted);
        $formatted = preg_replace('/(<li>.*<\/li>)/s', '<ul>$1</ul>', $formatted);
        
        // Paragraphs
        $formatted = preg_replace('/\n\n/', '</p><p>', $formatted);
        $formatted = '<p>' . $formatted . '</p>';
        
        // Clean up empty paragraphs
        $formatted = preg_replace('/<p>\s*<\/p>/', '', $formatted);
        
        return $formatted;
    }
    
    /**
     * Add header to PDF
     * 
     * @param TCPDF $pdf PDF object
     */
    private function add_pdf_header($pdf) {
        // Add logo if available
        $logo_path = get_template_directory() . '/assets/images/logo.png';
        if (file_exists($logo_path)) {
            $pdf->Image($logo_path, 15, 15, 30, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        }
        
        // Add title
        $pdf->SetFont('helvetica', 'B', 20);
        $pdf->SetTextColor(33, 150, 243);
        $pdf->Cell(0, 15, 'Your AI Workflow Blueprint', 0, 1, 'C');
        
        $pdf->SetFont('helvetica', '', 11);
        $pdf->SetTextColor(102, 102, 102);
        $pdf->Cell(0, 5, 'Personalized automation plan generated by MGRNZ', 0, 1, 'C');
        
        $pdf->Ln(10);
    }
    
    /**
     * Add blueprint content to PDF
     * 
     * @param TCPDF $pdf PDF object
     * @param array $blueprint_data Blueprint data
     */
    private function add_blueprint_content($pdf, $blueprint_data) {
        $content = $blueprint_data['content'] ?? '';
        
        // Convert markdown to HTML for PDF
        $html = $this->format_content_for_html($content);
        
        // Write HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
    }
    
    /**
     * Add diagram to PDF
     * 
     * @param TCPDF $pdf PDF object
     * @param array $diagram_data Diagram data
     */
    private function add_diagram_to_pdf($pdf, $diagram_data) {
        $pdf->AddPage();
        
        // Add section title
        $pdf->SetFont('helvetica', 'B', 16);
        $pdf->SetTextColor(33, 150, 243);
        $pdf->Cell(0, 10, 'Workflow Diagram', 0, 1, 'L');
        $pdf->Ln(5);
        
        // Add diagram
        if (isset($diagram_data['svg'])) {
            // Convert SVG to image if possible
            // For now, add a placeholder or the SVG code
            $pdf->SetFont('helvetica', '', 10);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->writeHTML($diagram_data['svg'], true, false, true, false, '');
        } elseif (isset($diagram_data['image_path'])) {
            // Add image if available
            $pdf->Image($diagram_data['image_path'], 15, $pdf->GetY(), 180, '', '', '', 'T', false, 300, '', false, false, 0, false, false, false);
        }
    }
    
    /**
     * Add footer to PDF
     * 
     * @param TCPDF $pdf PDF object
     */
    private function add_pdf_footer($pdf) {
        $pdf->AddPage();
        
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->SetTextColor(33, 150, 243);
        $pdf->Cell(0, 10, 'Next Steps', 0, 1, 'L');
        $pdf->Ln(5);
        
        $pdf->SetFont('helvetica', '', 11);
        $pdf->SetTextColor(0, 0, 0);
        
        $next_steps = '
        <p><strong>Ready to implement your AI workflow?</strong></p>
        <ul>
            <li>Book a free consultation to discuss implementation details</li>
            <li>Request a formal quote with exact pricing</li>
            <li>Explore our automation services at mgrnz.com</li>
        </ul>
        
        <p style="margin-top: 20px;"><strong>Contact Us:</strong></p>
        <p>
            Website: <a href="https://mgrnz.com">mgrnz.com</a><br>
            Email: info@mgrnz.com<br>
            Phone: +1 (555) 123-4567
        </p>
        
        <p style="margin-top: 20px; color: #666; font-size: 10px;">
            This blueprint was generated by the MGRNZ AI Workflow Wizard. 
            The recommendations are based on the information you provided and should be reviewed 
            by automation experts before implementation.
        </p>
        ';
        
        $pdf->writeHTML($next_steps, true, false, true, false, '');
    }
    
    /**
     * Generate unique filename for PDF
     * 
     * @param string $session_id Session ID
     * @param string $extension File extension (default: pdf)
     * @return string Filename
     */
    private function generate_filename($session_id, $extension = 'pdf') {
        $timestamp = time();
        $hash = substr(md5($session_id . $timestamp), 0, 8);
        return 'blueprint-' . $hash . '-' . $timestamp . '.' . $extension;
    }
    
    /**
     * Get download URL for generated PDF
     * 
     * @param string $pdf_path Path to PDF file
     * @return string Download URL
     */
    public function get_download_url($pdf_path) {
        $upload_dir = wp_upload_dir();
        $pdf_url = str_replace($upload_dir['basedir'], $upload_dir['baseurl'], $pdf_path);
        return $pdf_url;
    }
    
    /**
     * Clean up old PDF files (older than 7 days)
     */
    public static function cleanup_old_pdfs() {
        $upload_dir = wp_upload_dir();
        $pdf_dir = $upload_dir['basedir'] . '/blueprints';
        
        if (!file_exists($pdf_dir)) {
            return;
        }
        
        $files = glob($pdf_dir . '/blueprint-*');
        $now = time();
        $deleted = 0;
        
        foreach ($files as $file) {
            if (is_file($file)) {
                // Delete files older than 7 days
                if ($now - filemtime($file) >= 7 * 24 * 60 * 60) {
                    unlink($file);
                    $deleted++;
                }
            }
        }
        
        error_log("[PDF Generator] Cleaned up {$deleted} old blueprint files");
    }
}

// Schedule cleanup cron job
add_action('init', function() {
    if (!wp_next_scheduled('mgrnz_cleanup_old_pdfs')) {
        wp_schedule_event(time(), 'daily', 'mgrnz_cleanup_old_pdfs');
    }
});

add_action('mgrnz_cleanup_old_pdfs', ['MGRNZ_PDF_Generator', 'cleanup_old_pdfs']);
