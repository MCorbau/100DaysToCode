<?php
$x =5+5;
$x+=5;
$bo=true;
$bool=false;
echo $x;/*x=15*/
$name='Martin';
$y=6.7;
echo "<p>My name is". $name. "!.</p>";
echo $x+$y;

//The PHP strlen() function returns the length of a string.
//The PHP strrev() function reverses a string
//The PHP strpos() function searches for a specific text within a string
//The PHP str_word_count() function counts the number of words in a string
//The PHP str_replace() function replaces some characters with some other characters in a string

function firstFunction(){
  echo "<p> this is my first function :) </p>";
}
firstFunction();
function globalVar(){
  global $x,$y;
  echo $x;
}
globalVar();
var_dump($x);
//testing the class usage of php
class Car {
  function Car(){
    this->model = "Peugeot";
  }
}

$p = new Car();
echo $p->model;




?>
