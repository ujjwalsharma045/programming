<?php
$no = 3;
function fibonacciseries($no){
	static $nos = 1;	
    if($no==1){
	   return $nos;
    }
    else {
       $nos = $nos*$no;
	   fibonacciseries(--$no);	
    }
}

$val = fibonacciseries($no);
echo $val;
?>