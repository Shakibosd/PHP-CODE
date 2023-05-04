<?php

$var1 = true;
$var2 = false;
var_dump($var1 && $var2);//and operator


$var1 = true;
$var2 = true;
var_dump($var1 && $var2);//and operator


$var1 = true;
$var2 = false;
var_dump($var1 || $var2);//or operator


$var1 = true;
$var2 = false;
var_dump($var1 xor $var2);//xor operator


$var1 = true;
$var2 = false;
var_dump(!$var2);//not operator


$var1 = true;
$var2 = false;
var_dump(!$var1);//not operator


$var1 = 20;
$var2 = 10;
var_dump($var1 == 20 && $var2 > 5);//and operator


$var1 = 20;
$var2 = 10;
var_dump($var1 == 20 && $var2 < 5);//and operator


$var1 = 20;
$var2 = 10;
var_dump($var1 == 20 || $var2 < 5);//or operator
?>