<?php
$array = array(9, 11, 23, 21, 12, 23,34); 
echo "<pre>";
print_r($array);
$leng = count($array);
for($i=0; $i<($leng/2); $i++){
	if(isset($array[$i]) && isset($array[($leng-1)-$i])){
		$temp = $array[$i];
		$array[$i] = $array[($leng-1)-$i];
		$array[($leng-1)-$i] = $temp;
	}
}
echo "<pre>";
print_r($array);
?>