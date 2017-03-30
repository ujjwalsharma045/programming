<?php 
$array = array(2, 3, 4, array(4) , array(4,1) ,2);
echo mul($array);
function mul($array){
	static $mul =1;
	foreach($array as $k=>$val){
		if(is_array($val)){
		    mul($val);	
		}
		else {
			$mul = $mul*$val;
		}
	}
	return $mul;
}
?>