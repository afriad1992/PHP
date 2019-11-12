<?php 	
 function calculator($a,$b)
{if($b=0 && $signe="/") {echo"operation impossible";}
else{
{
case "+":
$c=$a+$b;
break; 
case "-":
$c=$a-$b;
break;
case "*":
$c=$a*$b;
break;
case "/":
$c=$a/$b;
break;}
echo $c;  }}
 calculator(3,4,"-"); ?>