<?php
if (session_status() === PHP_SESSION_NONE) {session_start();}

define('SITEURL','http://localhost:1234/website/');
$dbHost = 'localhost';
$dbName = 'logindetails';
$dbUsername = 'root';
$dbPassword = '';
$conn= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 


?>