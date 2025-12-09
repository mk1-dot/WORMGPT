php
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$date = date('Y-m-d H:i:s');

$log = "$date - IP: $ip - User Agent: $user_agent\n";

file_put_contents('log.txt', $log, FILE_APPEND);

echo "Thank you for visiting!";
?>
