<?php
$arr = array('2' , '34' , '334' , '34' , '2' , '12345'); 
echo "<pre>";
print_r($arr);
for($i=0; $i<count($arr); $i++){
    $newval[$arr[$i]] = isset($newval[$arr[$i]])? ++$newval[$arr[$i]]:1;  	
}
echo "<pre>";
print_r($newval);
?>