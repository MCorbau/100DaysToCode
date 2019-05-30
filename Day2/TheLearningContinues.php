<?php
/*To creat a constant, you have to use the function "define()"
there are three param:
name: the name of the constant
value: the value of the constant
case-insensitive: defines if case insensitive or not, default is false.
below are some example
*/
define('couple',[
  'Martin',
  'Clara'
]);
define("Hello","Hello ");

function test(){
  echo Hello.couple[1];
}
test();
/* Operators

arithmetic:
+	Addition	$x + $y	Sum of $x and $y
-	Subtraction	$x - $y	Difference of $x and $y
*	Multiplication	$x * $y	Product of $x and $y
/	Division	$x / $y	Quotient of $x and $y
%	Modulus	$x % $y	Remainder of $x divided by $y
**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power

assignement:

x = y	 is equal to  x = y	The left operand gets set to the value of the expression on the right
x += y is equal to	x = x + y	Addition
x -= y is equal to	x = x - y	Subtraction
x *= y is equal to	x = x * y	Multiplication
x /= y is equal to	x = x / y	Division
x %= y is equal to	x = x % y	Modulus

In php the if goes if(condition){

}
then its if{
  //code
}
elseif (condition) {
  // code...
}else {
  // code...
}
*/
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);



?>
