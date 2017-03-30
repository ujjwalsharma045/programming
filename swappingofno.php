<?php
$firstno = "5";
$secondno = "6";

echo "First No:-".$firstno;
echo "</br>Second No:-".$secondno;

$temp = $firstno;
$firstno =  $secondno;
$secondno =  $temp;

echo "</br>After Swapping</br>First No:-".$firstno;
echo "</br>Second No:-".$secondno;

?>