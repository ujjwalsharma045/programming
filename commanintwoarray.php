<?php
$firstarr = array(14, 12, 23, 212, 12, 23456);
$secondarr = array(4, 2, 23, 12, 276); 
$comman_elements = array();
for($i=0; $i<count($firstarr); $i++){
    for($j=0; $j<count($secondarr); $j++){
	    if($firstarr[$i] == $secondarr[$j] && !in_array($firstarr[$i] , $comman_elements)){
			$comman_elements[] = $firstarr[$i];
            break; 			
		}
    }	
}

echo "comman elements:-";
print_r($comman_elements);
?>