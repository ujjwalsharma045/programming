<?php
    $arr = ['5' , '8' , '5' , '7' , '5' , '8' , '12' , '11' , '1' , '5' , '2'];
	$newarr = array();  
	foreach($arr as $key=>$value){
		$newarr[$value] = (isset($newarr[$value]))? ++$newarr[$value]:1;
	}
	
	foreach($newarr as $key=>$value){
		echo $key.":-".$value."</br>";
	}	
?>