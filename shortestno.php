<?php
    $arr = array(
	    0=>5,
		
	    1=>array(
	        0=>6,
		    1=>array(
	           0=>5,
               1=>7    	            
		    )
	    ),
		
        2=>array(
		    0=>67,
            1=>array(
			   0=>5,
               2=>array(
			       0=>45,
				   3=>1
			   )			   
			)						
		),
		
        3=>23  		
	);
	
    findMin($arr);
	$total;
	
	function findMin($arr = array()){
		static $all;
		global $total;
        if(count($arr)>0){
            foreach($arr as $key=>$value){
				if(!is_array($value)){
	               $all[] = $value;
		        } 
                else {									
                    findMin($value);				
				}
			}				
		}						
		$total = $all;
	}
	
	$total = array_unique($total);
	echo min($total);
	//print_r($total);
		
?>