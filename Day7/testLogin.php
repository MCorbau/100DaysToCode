<?php
require 'SQLConnection.php';
$conn = new mysqli($base, $username, $password,$dbName);
$userID=$_POST['userID'];
$userPassword=$_POST['userPassword'];
$encryptedPassword=md5($userPassword);
$sql="SELECT * from Users WHERE username='$userID'
      and password='$encryptedPassword'";

$result = $conn->query($sql) or trigger_error(mysql_error(),E_USER_ERROR);


session_register("myusername");
session_register("mypassword");
header("location:loginSuccess.php");

?>
