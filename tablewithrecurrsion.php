<?php
$no = 11;
$arr = [];
tabl($no);
function tabl($no){
	global $arr;
	$table = 2;
	if($no==1){
		return $no;
	}
	else {
		$arr[$no-1] = $table*tabl($no-1);
		return $no;
	}
}
print_r($arr);
?>