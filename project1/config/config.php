<?php
/**
 * using mysqli_connect for database connection
 */
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'project1';
$url = "http://localhost/project1"; 
define('BASE_URL', 'http://localhost/project1/');
define('BASE_PATH', __DIR__);

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} 

//echo "DB Connection Successful." . "<br>";
?>
