<?php
$a = 11;
$b =9;

echo "First No:".$a;
echo "\nSecond No:".$b;
swap($a , $b);
function swap($a , $b){
   $a = $a - $b;
   $b = $b + $a;
   $a = $b - $a;
   echo "</br>After Swapping:-</br>First No:".$a;
   echo "\nSecond No:".$b;   
}
?>