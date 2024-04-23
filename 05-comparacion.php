<?php include 'includes/header.php';

$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = "30";

var_dump($num1 > $num2);
echo "<br>";

var_dump($num2 > $num1);
echo "<br>";

var_dump($num2 >= $num1);
echo "<br>";

var_dump($num1 <= $num2);
echo "<br>";

var_dump($num2 == $num3);
echo "<br>";

var_dump($num2 == $num4);
echo "<br>";

var_dump($num2 === $num4);
echo "<br>";

// -1 Si izquierda es menor.
var_dump($num1 <=> $num2);
echo "<br>";

// 0 Si es igual.
var_dump($num2 <=> $num3);
echo "<br>";

// 1 Si izquierda es mayor.
var_dump($num2 <=> $num1);




include 'includes/footer.php';