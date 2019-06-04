<?php
require 'SQLConnection.php';
$login=$_POST["userID"];
$password=$_POST["userPassword"];
$sql="INSERT INTO `users` (username,password) VALUES ('$login', '$password')";
$result = mysql_query($sql) or trigger_error(mysql_error(),E_USER_ERROR);
echo 'all done';
?>
