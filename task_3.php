<?php 
//Task 3: Array Sorting  
$grades=array(85, 92, 78, 88, 95);
function arraySord($grades){
   
arsort($grades,SORT_STRING);

foreach ($grades as $key => $val) {
    echo  $val . "\n";
}

}
arraySord($grades);



?>