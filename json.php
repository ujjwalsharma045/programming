<?php
$arr = array(0=>array('key1'=>1) , 1=>array('key2'=>2) , 2=>array('key3'=>1)); 
$arr2 = array(0=>array('key4' => 1) , 1=>array('key2' => 2));

echo json_encode($arr);
echo json_encode($arr2);
?>

<?php
$a = json_encode($arr);
$b = json_encode($arr2);

$a = json_decode($a);
$b = json_decode($b);

$aNew  = array();
for($i=0; $i<count($arr); $i++){
	foreach($a[$i] as $aKey=>$aValue){				
		$aNew[$aKey] = $aValue;   
	}
}

for($j=0; $j<count($arr2); $j++){
 	foreach($b[$j] as $bKey=>$bValue){				
	    if(!isset($aNew[$bKey])){
		   $aNew[$bKey] = $bValue;   
	    }
	}
}

$t = array();
$l = 0;

foreach($aNew as $k=>$v){
    $t[$l][$k] = $aNew[$k]; 
	$l++;
}

echo "<pre>";
echo json_encode($t);
?>