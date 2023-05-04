<?php
//Relesional Operator
$number1 = 10;
$number2 = 11;
var_dump($number1 == $number2);//equal

$number1 = 10;
$number2 = 10;
var_dump($number1 == $number2);//equal

$number1 = '10';
$number2 = 10;
var_dump($number1 === $number2);//identical

$number1 = 10;
$number2 = 10;
var_dump($number1 != $number2);//not equal

$number1 = 10;
$number2 = 16;
var_dump($number1 <> $number2);//not equal

$number1 = 10;
$number2 = 16;
var_dump($number1 > $number2);//gratterden

$number1 = 10;
$number2 = 16;
var_dump($number1 < $number2);//lessden


$number1 = 10;
$number2 = 16;
var_dump($number1 <= $number2);//lessden equal


$number1 = 14;
$number2 = 10;
var_dump($number1 <=> $number2);//spaceship

$number1 = 10;
$number2 = 10;
var_dump($number1 <=> $number2);//spaceship

$number1 = 5;
$number2 = 10;
var_dump($number1 <=> $number2);//spaceship
?>



