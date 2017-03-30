<?php
$first = [7 , 2 , 5 , 3 , 9 , 12 , 2];
$second = [5 , 3 , 9 , 12 , 6 , 14];

echo "<pre>first array:-</br>";
print_r($first);

echo "<pre>second array:-</br>";
print_r($second);

$counter = 0;
$common = [];
for($i=0; $i<count($first); $i++){
	for($j=0; $j<count($second); $j++){
	    if($second[$j]==$first[$i]){
	       $common[$counter] = $second[$j];
		   $counter++;
	    } 
	}		
}

echo "<pre>Common Array:-</br>";
print_r($common);
?>

