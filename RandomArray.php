<?php
function createArray($length){
    $Array = [];
    $max = "9";
    $min = "0";
    for($j=1;$j<strlen($length);$j++){
        $max .= "9";
        $min .= "0";
    }
    
    for($i=0;$i<$length;$i++){
        $Array[] = rand($min,$max);
    }
    return $Array;
}