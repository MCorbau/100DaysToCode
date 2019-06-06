<<<<<<< HEAD
<?php
require 'SQLConnection.php';
$conn = new mysqli($base, $username, $password,$dbName);
$login=$_POST["testUser"];
$password=$_POST["userPassword"];
$encryptPassword = md5($password);
$sql="INSERT INTO `users` (username,password) VALUES ('$login', '$encryptPassword')";
$result = $conn->query($sql) or trigger_error(mysql_error(),E_USER_ERROR);
echo 'all done';
?>
=======
<?php
require 'SQLConnection.php';
$conn = new mysqli($base, $username, $password,$dbName);
$login=$_POST["testUser"];
$password=$_POST["userPassword"];
$encryptPassword = md5($password);
$sql="INSERT INTO `users` (username,password) VALUES ('$login', '$encryptPassword')";
$result = $conn->query($sql) or trigger_error(mysql_error(),E_USER_ERROR);
echo 'all done';
?>
>>>>>>> master
