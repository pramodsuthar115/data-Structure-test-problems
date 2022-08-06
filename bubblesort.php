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

$array = createArray(10);

function bubbleSort($array){
    $arrayLength = sizeof($array);
    for($i=0;$i<$arrayLength-1;$i++){
        for($j=0;$j<$arrayLength-$i;$j++){
            if($array[$j]>$array[$j+1]){
                $temp = $array[$j+1];
                $array[$j+1]= $array[$j];
                $array[$j]= $temp;
            }
        }
        print_r($array);
        echo "</br>";
    }
    
}


print_r(bubbleSort($array)); die;