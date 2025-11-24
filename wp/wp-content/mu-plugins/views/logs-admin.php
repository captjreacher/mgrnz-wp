<?php
/**
 * Admin page template for viewing error logs and monitoring
 *
 * @package MGRNZ_AI_Workflow
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="wrap mgrnz-logs-admin">
    <h1>AI Workflow Error Logs & Monitoring</h1>
    
    <!-- Statistics Dashboard -->
    <div class="mgrnz-stats-dashboard">
        <h2>Statistics (Today)</h2>
        
        <div class="mgrnz-stats-grid">
            <?php
            $level_totals = [
                'error' => 0,
                'warning' => 0,
                'success' => 0,
                'info' => 0
            ];
            
            foreach ($stats['level_counts'] as $level_stat) {
                $level_totals[$level_stat['log_level']] = $level_stat['count'];
            }
            ?>
            
            <div class="mgrnz-stat-card mgrnz-stat-error">
                <div class="mgrnz-stat-icon">⚠️</div>
                <div class="mgrnz-stat-content">
                    <div class="mgrnz-stat-value"><?php echo esc_html($level_totals['error']); ?></div>
                    <div class="mgrnz-stat-label">Errors</div>
                </div>
            </div>
            
            <div class="mgrnz-stat-card mgrnz-stat-warning">
                <div class="mgrnz-stat-icon">⚡</div>
                <div class="mgrnz-stat-content">
                    <div class="mgrnz-stat-value"><?php echo esc_html($level_totals['warning']); ?></div>
                    <div class="mgrnz-stat-label">Warnings</div>
                </div>
            </div>
            
            <div class="mgrnz-stat-card mgrnz-stat-success">
                <div class="mgrnz-stat-icon">✅</div>
                <div class="mgrnz-stat-content">
                    <div class="mgrnz-stat-value"><?php echo esc_html($level_totals['success']); ?></div>
                    <div class="mgrnz-stat-label">Successes</div>
                </div>
            </div>
            
            <div class="mgrnz-stat-card mgrnz-stat-info">
                <div class="mgrnz-stat-icon">ℹ️</div>
                <div class="mgrnz-stat-content">
                    <div class="mgrnz-stat-value"><?php echo esc_html($level_totals['info']); ?></div>
                    <div class="mgrnz-stat-label">Info</div>
                </div>
            </div>
        </div>
        
        <!-- Category Breakdown -->
        <?php if (!empty($stats['category_counts'])): ?>
        <div class="mgrnz-category-stats">
            <h3>Top Categories</h3>
            <table class="widefat">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Count</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stats['category_counts'] as $cat_stat): ?>
                    <tr>
                        <td><?php echo esc_html(ucwords(str_replace('_', ' ', $cat_stat['category']))); ?></td>
                        <td><?php echo esc_html($cat_stat['count']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
        
        <!-- Recent Critical Errors -->
        <?php if (!empty($stats['critical_errors'])): ?>
        <div class="mgrnz-critical-errors">
            <h3>Recent Critical Errors</h3>
            <div class="mgrnz-error-list">
                <?php foreach ($stats['critical_errors'] as $error): ?>
                <div class="mgrnz-error-item">
                    <div class="mgrnz-error-time"><?php echo esc_html($error['created_at']); ?></div>
                    <div class="mgrnz-error-category"><?php echo esc_html($error['category']); ?></div>
                    <div class="mgrnz-error-message"><?php echo esc_html($error['message']); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Filters -->
    <div class="mgrnz-logs-filters">
        <h2>Filter Logs</h2>
        
        <form id="mgrnz-logs-filter-form" class="mgrnz-filter-form">
            <div class="mgrnz-filter-row">
                <div class="mgrnz-filter-field">
                    <label for="filter-level">Level:</label>
                    <select id="filter-level" name="level">
                        <option value="">All Levels</option>
                        <option value="error">Error</option>
                        <option value="warning">Warning</option>
                        <option value="success">Success</option>
                        <option value="info">Info</option>
                    </select>
                </div>
                
                <div class="mgrnz-filter-field">
                    <label for="filter-category">Category:</label>
                    <select id="filter-category" name="category">
                        <option value="">All Categories</option>
                        <option value="ai_service">AI Service</option>
                        <option value="email">Email</option>
                        <option value="submission">Submission</option>
                        <option value="cache">Cache</option>
                        <option value="rate_limit">Rate Limit</option>
                        <option value="validation">Validation</option>
                        <option value="system">System</option>
                    </select>
                </div>
                
                <div class="mgrnz-filter-field">
                    <label for="filter-date-from">Date From:</label>
                    <input type="date" id="filter-date-from" name="date_from">
                </div>
                
                <div class="mgrnz-filter-field">
                    <label for="filter-date-to">Date To:</label>
                    <input type="date" id="filter-date-to" name="date_to">
                </div>
                
                <div class="mgrnz-filter-field">
                    <label for="filter-search">Search:</label>
                    <input type="text" id="filter-search" name="search" placeholder="Search messages...">
                </div>
            </div>
            
            <div class="mgrnz-filter-actions">
                <button type="submit" class="button button-primary">Apply Filters</button>
                <button type="button" id="mgrnz-clear-filters" class="button">Clear Filters</button>
                <button type="button" id="mgrnz-export-logs" class="button">Export CSV</button>
                <button type="button" id="mgrnz-clear-old-logs" class="button button-secondary">Clear Old Logs (30+ days)</button>
            </div>
        </form>
    </div>
    
    <!-- Logs Table -->
    <div class="mgrnz-logs-table-container">
        <h2>Log Entries</h2>
        
        <div id="mgrnz-logs-loading" class="mgrnz-loading" style="display: none;">
            <span class="spinner is-active"></span> Loading logs...
        </div>
        
        <table class="widefat mgrnz-logs-table" id="mgrnz-logs-table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Level</th>
                    <th>Category</th>
                    <th>Message</th>
                    <th>Submission ID</th>
                    <th>IP Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="mgrnz-logs-tbody">
                <tr>
                    <td colspan="7" style="text-align: center; padding: 40px;">
                        Click "Apply Filters" to load logs
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class="mgrnz-pagination" id="mgrnz-pagination" style="display: none;">
            <button type="button" id="mgrnz-prev-page" class="button" disabled>Previous</button>
            <span id="mgrnz-page-info">Page 1 of 1</span>
            <button type="button" id="mgrnz-next-page" class="button" disabled>Next</button>
        </div>
    </div>
    
    <!-- Log Detail Modal -->
    <div id="mgrnz-log-detail-modal" class="mgrnz-modal" style="display: none;">
        <div class="mgrnz-modal-content">
            <span class="mgrnz-modal-close">&times;</span>
            <h2>Log Details</h2>
            <div id="mgrnz-log-detail-content"></div>
        </div>
    </div>
</div>

<style>
.mgrnz-logs-admin {
    margin: 20px;
}

.mgrnz-stats-dashboard {
    background: #fff;
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #ccd0d4;
    box-shadow: 0 1px 1px rgba(0,0,0,.04);
}

.mgrnz-stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 20px 0;
}

.mgrnz-stat-card {
    background: #f8f9fa;
    border-left: 4px solid #ccc;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.mgrnz-stat-card.mgrnz-stat-error {
    border-left-color: #dc3545;
}

.mgrnz-stat-card.mgrnz-stat-warning {
    border-left-color: #ffc107;
}

.mgrnz-stat-card.mgrnz-stat-success {
    border-left-color: #28a745;
}

.mgrnz-stat-card.mgrnz-stat-info {
    border-left-color: #17a2b8;
}

.mgrnz-stat-icon {
    font-size: 32px;
}

.mgrnz-stat-value {
    font-size: 32px;
    font-weight: bold;
    line-height: 1;
}

.mgrnz-stat-label {
    font-size: 14px;
    color: #666;
    text-transform: uppercase;
}

.mgrnz-category-stats,
.mgrnz-critical-errors {
    margin-top: 30px;
}

.mgrnz-error-list {
    margin-top: 10px;
}

.mgrnz-error-item {
    background: #fff3cd;
    border-left: 4px solid #dc3545;
    padding: 10px;
    margin-bottom: 10px;
}

.mgrnz-error-time {
    font-size: 12px;
    color: #666;
}

.mgrnz-error-category {
    font-weight: bold;
    text-transform: uppercase;
    font-size: 11px;
    color: #dc3545;
}

.mgrnz-error-message {
    margin-top: 5px;
}

.mgrnz-logs-filters {
    background: #fff;
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #ccd0d4;
    box-shadow: 0 1px 1px rgba(0,0,0,.04);
}

.mgrnz-filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin-bottom: 15px;
}

.mgrnz-filter-field label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
}

.mgrnz-filter-field input,
.mgrnz-filter-field select {
    width: 100%;
}

.mgrnz-filter-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.mgrnz-logs-table-container {
    background: #fff;
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #ccd0d4;
    box-shadow: 0 1px 1px rgba(0,0,0,.04);
}

.mgrnz-logs-table {
    margin-top: 20px;
}

.mgrnz-logs-table th {
    font-weight: 600;
}

.mgrnz-log-level {
    display: inline-block;
    padding: 3px 8px;
    border-radius: 3px;
    font-size: 11px;
    font-weight: bold;
    text-transform: uppercase;
}

.mgrnz-log-level-error {
    background: #dc3545;
    color: #fff;
}

.mgrnz-log-level-warning {
    background: #ffc107;
    color: #000;
}

.mgrnz-log-level-success {
    background: #28a745;
    color: #fff;
}

.mgrnz-log-level-info {
    background: #17a2b8;
    color: #fff;
}

.mgrnz-pagination {
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    justify-content: center;
}

.mgrnz-loading {
    text-align: center;
    padding: 20px;
}

.mgrnz-modal {
    display: none;
    position: fixed;
    z-index: 100000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

.mgrnz-modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 800px;
    max-height: 80vh;
    overflow-y: auto;
}

.mgrnz-modal-close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.mgrnz-modal-close:hover,
.mgrnz-modal-close:focus {
    color: #000;
}

.mgrnz-log-detail-row {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.mgrnz-log-detail-label {
    font-weight: bold;
    margin-bottom: 5px;
}

.mgrnz-log-detail-value {
    background: #f8f9fa;
    padding: 10px;
    border-radius: 3px;
    font-family: monospace;
    white-space: pre-wrap;
    word-break: break-all;
}
</style>
