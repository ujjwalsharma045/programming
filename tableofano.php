<?php
for($i=1; $i<=10; $i++){
	echo "Table of &nbsp;".$i."</br>";
	for($j=1; $j<=10; $j++){
		echo $i*$j.",&nbsp;";
	} 
	echo "</br>";
}
?>