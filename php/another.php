<?php 
$a = array(1, 3, 5, 7, 10 ); 
$b = array(2, 4, 6, 8, 9); 
$aCounter = 0; 
$bCounter = 0; 
$c = array(); 
foreach($a as $aKey => $value) { 
 $bCounter = 0;  
 foreach($b as $bKey => $bval) { 
 if($aCounter == $bCounter) { 
 $c[$value] = $bval;  
 } 
 $bCounter++; 
 } 
 $aCounter++; 
} 
echo "<pre>";print_r($c);exit; 
?> 