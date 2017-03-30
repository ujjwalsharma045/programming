<?php
 $db = new PDO("mysql:host=localhost;dbname=entries;charset=utf8mb4" , "root" , "" , array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
 $query ="select distinct(E.salary) from employee as E order by E.salary DESC limit 3 , 1";
 $execution = $db->query($query);
 $result = $execution->fetch(PDO::FETCH_ASSOC);
 echo @$result['salary'];
?>