/**
 * AI Workflow Submission Dashboard JavaScript
 */

(function($) {
    'use strict';
    
    $(document).ready(function() {
        // Initialize chart if data is available
        if (typeof submissionsChartData !== 'undefined' && submissionsChartData.labels.length > 0) {
            initSubmissionsChart();
        }
    });
    
    /**
     * Initialize submissions chart using Chart.js
     */
    function initSubmissionsChart() {
        var canvas = document.getElementById('mgrnz-submissions-chart');
        if (!canvas) {
            return;
        }
        
        // Check if Chart.js is loaded, if not, load it
        if (typeof Chart === 'undefined') {
            loadChartJS(function() {
                renderChart(canvas);
            });
        } else {
            renderChart(canvas);
        }
    }
    
    /**
     * Load Chart.js library
     */
    function loadChartJS(callback) {
        var script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js';
        script.onload = callback;
        document.head.appendChild(script);
    }
    
    /**
     * Render the chart
     */
    function renderChart(canvas) {
        var ctx = canvas.getContext('2d');
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: submissionsChartData.labels,
                datasets: [{
                    label: 'Submissions',
                    data: submissionsChartData.data,
                    borderColor: '#2271b1',
                    backgroundColor: 'rgba(34, 113, 177, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    pointBackgroundColor: '#2271b1',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 13
                        },
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y + ' submission' + (context.parsed.y !== 1 ? 's' : '');
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                            font: {
                                size: 12
                            }
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 12
                            },
                            maxRotation: 45,
                            minRotation: 45
                        },
                        grid: {
                            display: false
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                }
            }
        });
    }
    
})(jQuery);
