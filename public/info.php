<?php
// On WEB_SERVER
$host="ec2-3-20-174-133.us-east-2.compute.amazonaws.com";              // Host name
//$host="3.20.174.133";              // Host name
$username="admin";    // Mysql usernam
$password="Truong@1";           // Mysql password
$db_name="laravel";             // Database name
$db_port="3306";

$mysqli = new mysqli($host,$username,$password,$db_name, $db_port);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo 'connect success';
}
?>