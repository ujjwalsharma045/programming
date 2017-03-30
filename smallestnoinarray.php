<?php
 $arr = array(2, 22, 45, 1, 234, 2, 34);
 $min = $arr[0];
 for($i=1; $i<count($arr); $i++){
	if($arr[$i]<$min){
		$min = $arr[$i]; 
	}
 }
 echo "Min no:-".$min;
?>