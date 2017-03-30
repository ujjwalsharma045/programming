<?php
$arr = [4,5,23,12,34,567,2, 456, 6 ,567];
for($i=0; $i<count($arr)-1; $i++){
	if($i==0){
		$min = $arr[$i];
	}
	
	if($arr[$i+1]<$min){
        $min = $arr[$i+1]; 	    	
	}	
}
echo $min; 
?>