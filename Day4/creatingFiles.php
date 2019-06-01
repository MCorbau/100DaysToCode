<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
for ($row =0;$row<5;$row++){
  fwrite($myfile, strval($row));
}
fclose($myfile);
?>
