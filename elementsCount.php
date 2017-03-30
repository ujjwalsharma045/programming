<?php
$list = [7, 2 , 5 , 3 , 9 ,12 , 2, 23, 56, 21, 24];

echo "<pre>array</br>";
print_r($list);

$counter = 0;
for($k=0; $k<count($list); $k++){	
	if($list[$k]=="2"){
	   $counter++;
	}
}

echo "<br/>repeatence of 2:-";
echo $counter;
?>