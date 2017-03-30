<?php
for($i=1; $i<=5; $i++){
	for($j=1; $j<$i; $j++){
		echo "&nbsp;";
	}
	
	for($k=5; $k>=$i; $k--){
		echo "*";
	}
	echo "</br>";
}
?>