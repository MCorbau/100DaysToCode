<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Hello, my name is " . $_SESSION["name"] . ".<br>";
echo "If you need to contact me, my email adress is " . $_SESSION["email"] . ".";
?>

</body>
</html>
