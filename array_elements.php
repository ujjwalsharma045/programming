<?php
    $arr = [2,34, 234, 234, 212, 2, 3, 456, 123, 654, 3, 56, 123, 18, 23, 123, 87]; 
	$elements = "";
    for($i=0; $i<count($arr); $i++){
		if(!isset($elements[$arr[$i]])){
			for($j=0; $j<count($arr); $j++){
				if($arr[$i]==$arr[$j]){
					if(isset($elements[$arr[$i]])){
					   $elements[$arr[$i]] = $elements[$arr[$i]]+1;
					}
					else {
					   $elements[$arr[$i]] = 1;	
					} 				
				}  
			}
		}
    }
	
	print_r($elements);
?>