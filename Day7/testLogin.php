<?php
require 'SQLConnection.php';

$userID=$_POST['userID'];
$userPassword=$_POST['userPassword'];
$sql="SELECT * from Users WHERE username='$userID'
      and password='$userPassword'";

$res=mysql_query($sql);

if (mysql_num_rows($res)==1){
  session_register("myusername");
  session_register("mypassword");
  header("location:loginSuccess.php");
}
else{
echo "Wrong Username or Password";
}
?>
