<?php
$database_host = 'localhost';
$database_user = 'root';
$database_password = '';
$database_name = '';
$connection = mysqli_connect($database_host,$database_user,$database_password,$database_name);
echo $connection;