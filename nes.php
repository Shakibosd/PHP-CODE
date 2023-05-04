<?php
//Nested condition
$num1 = 20;
$num2 = 10;

if($num1 > $num2){
  if($num1 > 50){
    echo "Hello";
  }
  elseif($num1 < 30){
    if($num1==20){
	 echo "Yes";
	}
	else{
	 echo "Not";
	}
  }
  elseif($num1 > 30){
    echo "wow";
  }
  else{
    echo "Nice";
  } 
}
?>