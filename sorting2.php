<?php 
$arr = ['23', '12', '234', '11', '2344', '46'];
echo "<pre>";
print_r($arr);
for($i=0; $i<count($arr); $i++){
	for($j=($i+1); $j<count($arr); $j++){
		if($arr[$j]<$arr[$i]){
			$temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;   			
		}
	}
}
echo "<pre>";
print_r($arr);
?>