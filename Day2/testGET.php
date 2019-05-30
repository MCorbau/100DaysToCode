<html>
<body>

<?php
//echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
foreach ($_GET as $key => $value) {
  echo $key . ' => ' . $value.'<br>';
}
?>

</body>
</html>
