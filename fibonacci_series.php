<?php
$first = 0;
$second = 1;
echo $first."&nbsp;";
for($i=1; $i<=10; $i++){
  $nextno = $first + $second;	
  echo $nextno."&nbsp;";
  $first = $second;
  $second = $nextno;  
} 
?>