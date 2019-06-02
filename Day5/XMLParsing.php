<?php
//$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
//print_r($xml);
//echo $xml->to.'<br>';
$store=simplexml_load_file("testXML.xml") or die("Error: Cannot create object");
echo $store->clothe[0]->title.' is at a price of '.$store->clothe[0]->price.'<br>';
foreach($store->children() as $item) {
    echo $item->title['color'].'<br>';
}
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>
