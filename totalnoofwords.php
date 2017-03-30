<?php
    $a= array(1, 2, array(2,3), 5, array(5,2,3));
	$val = getmultiplication($a);
	
	//global $newvalue;
	
    function getmultiplication($a){
		static $newvalue = 1;
	    foreach($a as $key=>$value){
		    if(is_array($value)){
			    getmultiplication($value); 
		    }
		    else {
			    $newvalue = $newvalue*$value;				   
		    }							
	    }
		
		return $newvalue;	
    }
	
	echo $val;
?>