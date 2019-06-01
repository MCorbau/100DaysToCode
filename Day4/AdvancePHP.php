
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learning advanced PHP</title>
  </head>
  <body>
    <h2>tshirt stock in our store and online</h2>
    <?php
    $tshirt = array
      (
      //color of t-shirt , online stock, stock in store
      array("grey",22,18),
      array("blue",0,13),
      array("red",0,2),
      array("black",17,15)
      );
    $shoes = array
      (
      // different shoes , online stock, stock in store
      array("nike",30,18),
      array("DC",15,10),
      array("Converse",200,143),
      array("adidas",170,158)
      );
    for ($row =0;$row<count($tshirt);$row++){
      if ($tshirt[$row][1]>0){
        echo $tshirt[$row][0].' is in stock : '.$tshirt[$row][1].' in store and '.$tshirt[$row][2].' online <br>';
      }
      else{
        echo $tshirt[$row][0].' not in stock<br>';
      }
    }
    echo "<br><br>";
    //mktime(hour,minute,second,month,day,year) to make a time
    echo "Last updated " . date('Y/m/d').' at '.date("h/i/sa");
    ?>
  </body>
</html>
