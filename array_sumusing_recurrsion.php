<?php 
$array = array(2, 3, 4, 5, 6, 7, 4, 5);
echo arrmulti($array , 0);
function arrmulti($array , $no){
	static $sum = 0;
   	if(count($array)>$no){
		$sum =  $array[$no] + arrmulti($array , $no+1);
		return $sum;
	}
	else {
		return 0; 
	}
}
?>