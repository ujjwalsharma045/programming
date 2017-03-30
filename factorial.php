<?php
for($i=1; $i<=10; $i++){
	$fact = $i; 
	for($j=($i-1); $j>=1; $j--){
	  $fact = $fact*$j; 	
	}
    echo "Factorial of ".$i." ".$fact."</br>";
}
?>