<?php
  for($i=1; $i<=200; $i++){
	$no = $i;
    $rev = 0;	
    while($no>=1){
       $remainder = $no%10;
	   $rev = $rev*10+$remainder;	   
	   $no = $no/10; 	   
	} 

    if($rev==$i){
		echo "Reverse of no ".$i." is ".$rev." same</br>";
	}
    else {
	    echo "Reverse of no ".$i." is ".$rev." not same</br>";	
	}	
  }
?>