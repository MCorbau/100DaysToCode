<?php
require 'SQLConnection.php';
$conn= new PDO("mysql:host=$base;dbname=$dbName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Array with names
/*
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
try{
  foreach ($a as $names) {
    echo $name;
    $sql1 = "INSERT INTO `Name` VALUES ('$names')";
    $res = $conn->exec($sql1);
    echo 'Success';
  }
}
catch(PDOException $e){
  echo $sql . "<br>" . $e->getMessage();
}

// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
$sql = 'select * from Name';
foreach ($conn->query($sql) as $row) {
  print_r( $row['Name']."<br>");
}

*/



// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  $n = $conn->exec("SELECT * FROM Name");
  foreach($conn->query($sql) as $row) {
    $name=$row['Name'];
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
