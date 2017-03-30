<?php
for($i=2; $i<=50; $i++){
	$prime_no =true;
	for($j=2; $j<=$i; $j++){
		if($i%$j==0 && $i!=$j){
			$prime_no =false;
			break;
		}		
	}
	
	if(isset($prime_no) && $prime_no ==false){
	    echo $i. "is not a prime no.";	
	}
	else {
		echo $i. "is prime no.";
	}
	echo "</br>";
}
?>