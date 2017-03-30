<?php
$no = @$_GET['no'];
$is_prime_no = true;
    switch($no){
        case 1:
          $is_prime_no = false;
          break;
        case 2:
          $is_prime_no = true;
          break;
        default;
			if($no<=0){
				$is_prime_no = false;
			}
			else {
				for($j=2; $j<($no-1); $j++){
					if($no%$j==0){
					   $is_prime_no = false;
					   break;
					}					
				}
				
			}				
    }
	
	if($is_prime_no){
	  echo $no." is a prime no";
	}
	else {
	  echo $no." is not a prime no";
	}
	
?>