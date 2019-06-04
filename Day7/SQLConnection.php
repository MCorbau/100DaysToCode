<?php
$username='root';
$password='root';
$base='localhost:8889';
$dbName='test';
$conn = mysqli_connect($base, $username, $password,$dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
