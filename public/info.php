<?php
$database_host = 'localhost';
$database_user = 'root';
$database_password = 'truongvd@130194';
$database_name = 'laravel';
$connection = mysqli_connect($database_host,$database_user,$database_password,$database_name);
echo $connection;