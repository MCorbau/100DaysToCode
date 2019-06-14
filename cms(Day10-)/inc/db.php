<?php ob_start();

$base = "localhost";
$username = "root";
$password = "root";
$dbName = "cms";



$conn = new mysqli($base, $username, $password,$dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
