<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "Martin Corbau";
$_SESSION["email"] = "martincorbau@hotmail.com";
echo "Session variables are set.<br>";


?>
<a href='sessionTest2.php'>test</a>
</body>
</html>
