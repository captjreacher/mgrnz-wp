/**
 * Admin JavaScript for AI Workflow Error Logs
 */

(function($) {
    'use strict';
    
    let currentPage = 1;
    let totalPages = 1;
    
    $(document).ready(function() {
        // Load logs on page load
        loadLogs();
        
        // Filter form submission
        $('#mgrnz-logs-filter-form').on('submit', function(e) {
            e.preventDefault();
            currentPage = 1;
            loadLogs();
        });
        
        // Clear filters
        $('#mgrnz-clear-filters').on('click', function() {
            $('#mgrnz-logs-filter-form')[0].reset();
            currentPage = 1;
            loadLogs();
        });
        
        // Export logs
        $('#mgrnz-export-logs').on('click', function() {
            exportLogs();
        });
        
        // Clear old logs
        $('#mgrnz-clear-old-logs').on('click', function() {
            if (confirm('Are you sure you want to delete all logs older than 30 days? This cannot be undone.')) {
                clearOldLogs();
            }
        });
        
        // Pagination
        $('#mgrnz-prev-page').on('click', function() {
            if (currentPage > 1) {
                currentPage--;
                loadLogs();
            }
        });
        
        $('#mgrnz-next-page').on('click', function() {
            if (currentPage < totalPages) {
                currentPage++;
                loadLogs();
            }
        });
        
        // View log details
        $(document).on('click', '.mgrnz-view-log-detail', function() {
            const logId = $(this).data('log-id');
            viewLogDetail(logId);
        });
        
        // Close modal
        $('.mgrnz-modal-close').on('click', function() {
            $('#mgrnz-log-detail-modal').hide();
        });
        
        $(window).on('click', function(e) {
            if ($(e.target).is('#mgrnz-log-detail-modal')) {
                $('#mgrnz-log-detail-modal').hide();
            }
        });
    });
    
    /**
     * Load logs from server
     */
    function loadLogs() {
        const formData = {
            action: 'mgrnz_get_logs',
            nonce: mgrnzLogs.nonce,
            level: $('#filter-level').val(),
            category: $('#filter-category').val(),
            date_from: $('#filter-date-from').val(),
            date_to: $('#filter-date-to').val(),
            search: $('#filter-search').val(),
            page: currentPage,
            per_page: 50
        };
        
        $('#mgrnz-logs-loading').show();
        $('#mgrnz-logs-table').hide();
        
        $.post(mgrnzLogs.ajaxUrl, formData, function(response) {
            $('#mgrnz-logs-loading').hide();
            $('#mgrnz-logs-table').show();
            
            if (response.success) {
                renderLogs(response.data);
            } else {
                alert('Error loading logs: ' + (response.data.message || 'Unknown error'));
            }
        }).fail(function() {
            $('#mgrnz-logs-loading').hide();
            $('#mgrnz-logs-table').show();
            alert('Failed to load logs. Please try again.');
        });
    }
    
    /**
     * Render logs in table
     */
    function renderLogs(data) {
        const tbody = $('#mgrnz-logs-tbody');
        tbody.empty();
        
        if (data.logs.length === 0) {
            tbody.append('<tr><td colspan="7" style="text-align: center; padding: 40px;">No logs found</td></tr>');
            $('#mgrnz-pagination').hide();
            return;
        }
        
        data.logs.forEach(function(log) {
            const levelClass = 'mgrnz-log-level mgrnz-log-level-' + log.log_level;
            const submissionLink = log.submission_id 
                ? '<a href="post.php?post=' + log.submission_id + '&action=edit">' + log.submission_id + '</a>'
                : '-';
            
            const row = $('<tr>');
            row.append('<td>' + escapeHtml(log.created_at) + '</td>');
            row.append('<td><span class="' + levelClass + '">' + escapeHtml(log.log_level) + '</span></td>');
            row.append('<td>' + escapeHtml(formatCategory(log.category)) + '</td>');
            row.append('<td>' + escapeHtml(truncate(log.message, 100)) + '</td>');
            row.append('<td>' + submissionLink + '</td>');
            row.append('<td>' + escapeHtml(log.ip_address) + '</td>');
            row.append('<td><button type="button" class="button button-small mgrnz-view-log-detail" data-log-id="' + log.id + '">View Details</button></td>');
            
            // Store full log data
            row.data('log', log);
            
            tbody.append(row);
        });
        
        // Update pagination
        totalPages = data.total_pages;
        currentPage = data.page;
        
        $('#mgrnz-page-info').text('Page ' + currentPage + ' of ' + totalPages + ' (' + data.total + ' total)');
        $('#mgrnz-prev-page').prop('disabled', currentPage <= 1);
        $('#mgrnz-next-page').prop('disabled', currentPage >= totalPages);
        $('#mgrnz-pagination').show();
    }
    
    /**
     * View log details in modal
     */
    function viewLogDetail(logId) {
        const row = $('.mgrnz-view-log-detail[data-log-id="' + logId + '"]').closest('tr');
        const log = row.data('log');
        
        if (!log) {
            alert('Log data not found');
            return;
        }
        
        let html = '';
        
        html += '<div class="mgrnz-log-detail-row">';
        html += '<div class="mgrnz-log-detail-label">ID:</div>';
        html += '<div class="mgrnz-log-detail-value">' + escapeHtml(log.id) + '</div>';
        html += '</div>';
        
        html += '<div class="mgrnz-log-detail-row">';
        html += '<div class="mgrnz-log-detail-label">Time:</div>';
        html += '<div class="mgrnz-log-detail-value">' + escapeHtml(log.created_at) + '</div>';
        html += '</div>';
        
        html += '<div class="mgrnz-log-detail-row">';
        html += '<div class="mgrnz-log-detail-label">Level:</div>';
        html += '<div class="mgrnz-log-detail-value">' + escapeHtml(log.log_level) + '</div>';
        html += '</div>';
        
        html += '<div class="mgrnz-log-detail-row">';
        html += '<div class="mgrnz-log-detail-label">Category:</div>';
        html += '<div class="mgrnz-log-detail-value">' + escapeHtml(log.category) + '</div>';
        html += '</div>';
        
        html += '<div class="mgrnz-log-detail-row">';
        html += '<div class="mgrnz-log-detail-label">Message:</div>';
        html += '<div class="mgrnz-log-detail-value">' + escapeHtml(log.message) + '</div>';
        html += '</div>';
        
        if (log.context && Object.keys(log.context).length > 0) {
            html += '<div class="mgrnz-log-detail-row">';
            html += '<div class="mgrnz-log-detail-label">Context:</div>';
            html += '<div class="mgrnz-log-detail-value">' + escapeHtml(JSON.stringify(log.context, null, 2)) + '</div>';
            html += '</div>';
        }
        
        if (log.submission_id) {
            html += '<div class="mgrnz-log-detail-row">';
            html += '<div class="mgrnz-log-detail-label">Submission ID:</div>';
            html += '<div class="mgrnz-log-detail-value"><a href="post.php?post=' + log.submission_id + '&action=edit">' + log.submission_id + '</a></div>';
            html += '</div>';
        }
        
        html += '<div class="mgrnz-log-detail-row">';
        html += '<div class="mgrnz-log-detail-label">IP Address:</div>';
        html += '<div class="mgrnz-log-detail-value">' + escapeHtml(log.ip_address) + '</div>';
        html += '</div>';
        
        if (log.user_agent) {
            html += '<div class="mgrnz-log-detail-row">';
            html += '<div class="mgrnz-log-detail-label">User Agent:</div>';
            html += '<div class="mgrnz-log-detail-value">' + escapeHtml(log.user_agent) + '</div>';
            html += '</div>';
        }
        
        $('#mgrnz-log-detail-content').html(html);
        $('#mgrnz-log-detail-modal').show();
    }
    
    /**
     * Export logs to CSV
     */
    function exportLogs() {
        const params = new URLSearchParams({
            action: 'mgrnz_export_logs',
            nonce: mgrnzLogs.nonce,
            level: $('#filter-level').val(),
            category: $('#filter-category').val(),
            date_from: $('#filter-date-from').val(),
            date_to: $('#filter-date-to').val()
        });
        
        window.location.href = mgrnzLogs.ajaxUrl + '?' + params.toString();
    }
    
    /**
     * Clear old logs
     */
    function clearOldLogs() {
        const formData = {
            action: 'mgrnz_clear_logs',
            nonce: mgrnzLogs.nonce,
            days: 30
        };
        
        $.post(mgrnzLogs.ajaxUrl, formData, function(response) {
            if (response.success) {
                alert(response.data.message);
                loadLogs(); // Reload logs
            } else {
                alert('Error clearing logs: ' + (response.data.message || 'Unknown error'));
            }
        }).fail(function() {
            alert('Failed to clear logs. Please try again.');
        });
    }
    
    /**
     * Format category name
     */
    function formatCategory(category) {
        return category.split('_').map(function(word) {
            return word.charAt(0).toUpperCase() + word.slice(1);
        }).join(' ');
    }
    
    /**
     * Truncate text
     */
    function truncate(text, length) {
        if (text.length <= length) {
            return text;
        }
        return text.substring(0, length) + '...';
    }
    
    /**
     * Escape HTML
     */
    function escapeHtml(text) {
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return String(text).replace(/[&<>"']/g, function(m) { return map[m]; });
    }
    
})(jQuery);
