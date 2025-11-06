<?php
$mysqli = @new mysqli('localhost','hdmqglfetq_admin','MY-SECRET','hdmqglfetq_wp_mgrnz');
if ($mysqli->connect_error) { die('MySQL connect error: '.$mysqli->connect_errno.' - '.$mysqli->connect_error); }
echo "Connected OK";
