<?php
// Quick script to check active theme in local database
$db_host = 'localhost';
$db_name = 'local';
$db_user = 'root';
$db_pass = 'root';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to database successfully!\n\n";
    
    // Check active theme
    $stmt = $pdo->query("SELECT option_value FROM wp_options WHERE option_name = 'template'");
    $template = $stmt->fetchColumn();
    echo "Active Theme (template): $template\n";
    
    $stmt = $pdo->query("SELECT option_value FROM wp_options WHERE option_name = 'stylesheet'");
    $stylesheet = $stmt->fetchColumn();
    echo "Active Theme (stylesheet): $stylesheet\n\n";
    
    // Check site URL
    $stmt = $pdo->query("SELECT option_value FROM wp_options WHERE option_name = 'siteurl'");
    $siteurl = $stmt->fetchColumn();
    echo "Site URL: $siteurl\n";
    
    $stmt = $pdo->query("SELECT option_value FROM wp_options WHERE option_name = 'home'");
    $home = $stmt->fetchColumn();
    echo "Home URL: $home\n\n";
    
    // Count posts
    $stmt = $pdo->query("SELECT COUNT(*) FROM wp_posts WHERE post_status = 'publish' AND post_type = 'post'");
    $post_count = $stmt->fetchColumn();
    echo "Published Posts: $post_count\n";
    
    $stmt = $pdo->query("SELECT COUNT(*) FROM wp_posts WHERE post_status = 'publish' AND post_type = 'page'");
    $page_count = $stmt->fetchColumn();
    echo "Published Pages: $page_count\n";
    
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
