<?php
$listing = [
        0=>'1',
        1=>'2', 
		2=>'3',
		3=>'5',
		4=>'7'
    ];

echo "<pre>";
print_r($listing);

$current_place = 4;
$reversable_place = 0;
$newlisting = $listing;

if($current_place >$reversable_place){	
    $newlisting[$reversable_place] = $listing[$current_place]; 
    for($i=($reversable_place+1); $i<=$current_place; $i++){	    	   
		$newlisting[$i] = $listing[$i-1];		
    }	  	
}
else if($current_place < $reversable_place){
    $newlisting[$reversable_place] = $listing[$current_place]; 
    for($i=($reversable_place-1); $i>=$current_place; $i--){	    	   
		$newlisting[$i] = $listing[$i+1];		
    }
}

$listing = $newlisting;
echo "<pre>";
print_r($listing);			
?>