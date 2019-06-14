<?php ob_start();

db_host = "localhost";
db_user = "root";
db_pass = "root";
db_name = "cms";



$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);


?>
