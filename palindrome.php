<?php
$no =@$_GET['no'];
echo "No:-".$no;
$arno = str_split($no);
for($i=(count($arno)-1); $i>=0; $i--){
	$reverse[] = $arno[$i];		
}

echo "</br>";

$reverstring = implode("" , $reverse);
if($reverstring==$no){
  echo "This is palindrome no";
}
else{
  echo "This is not a palindrome no";	
}
?>

