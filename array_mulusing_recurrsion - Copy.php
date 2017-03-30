<?php 
$array = array(2, 3, 4, 5);
echo arrmulti($array , 0);
function arrmulti($array , $no){
   	if(count($array)>$no){
		$mul =  $array[$no]*arrmulti($array , $no+1);
		return $mul;
	}
	else {
		return 1; 
	}
}
?>