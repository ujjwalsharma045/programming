<?php
$no = 5;
for($i=1; $i<=$no; $i++){
	for($j=$no; $j>=$i; $j--){
		echo "&nbsp;";
	}
	
	for($k=1; $k<=((2*$i)-1); $k++){
	   echo "*";	
	}
	
	for($l=$no; $l>=$i; $l--){
		echo "&nbsp;";
	}
	
	echo "</br>";
}

for($i=($no-1); $i>=1; $i--){
    for($j=$no; $j>=$i; $j--){
		echo "&nbsp;"; 
	}
	
	for($k=1; $k<=(2*$i)-1; $k++){
		echo "*";
	}

    for($l=$no; $l>=$i; $l--){
		echo "&nbsp;"; 
	} 	
	
	echo "</br>";
} 
?>