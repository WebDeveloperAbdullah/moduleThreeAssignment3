
<?php

//Task 1: String Manipulation

$text="The quick brown fox jumps over the lazy dog";
function stringManipulation($text){
    $textReplace=str_replace( "brown","red",$text);
    
    echo $result=strtolower($textReplace);


}

stringManipulation($text);




?>
    