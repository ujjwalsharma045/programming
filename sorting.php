<?php
$list = [7, 2 , 5 , 3 , 9 ,12 , 2, 23, 56, 21, 24];

echo "<pre>array before sorting</br>";
print_r($list);
echo "</br>";
 
for($k=0; $k<count($list); $k++){
	for($l=($k+1); $l<count($list); $l++){
	    if($list[$k]>$list[$l]){
	        $temp = $list[$k];
		    $list[$k] = $list[$l];
            $list[$l] = $temp;
		} 
	}
	
}

echo "<pre>array after sorting</br>";
print_r($list);
?>