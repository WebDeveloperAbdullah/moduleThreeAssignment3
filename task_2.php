<?php

//Task 2: Array Manipulation

$numbers=array(1,2,3,4,5,6,7,8,9,10);
//$numbers=array();

for($i=1;$i<10;$i++){
  if($i%2==1){
  array_push($numbers,$i);
  }
}

$numbers=range(1,10,2);
print_r($numbers);

?>