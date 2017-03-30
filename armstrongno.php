<?php
for($i=1; $i<=200; $i++){
	$no = $i;
	$sum = 0;
	while($no>=1){
      $remainder = $no%10;	
      $sum+= ($remainder*$remainder*$remainder);
	  $no = $no/10;	
	}
	
	if($sum == $i){
	    echo $i." is armstrong no.</br>";
	}
	else {
	    echo $i." is not armstrong no.</br>";	
	}
}
?>