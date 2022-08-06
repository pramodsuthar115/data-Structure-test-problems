<?php

include_once("./RandomArray.php");

$array = CreateArray(500000);

print_r(rsort($array));
// print_r(countSort($array));
print_r($array);
echo "</br>";
function countSort($array)
{
    $maxValue = getMax($array);
    $dummyArray  = array_fill(0,$maxValue +1,0);

    foreach($array as $key => $value){
        $dummyArray[$value]++;
    }
    $newArray = array();
    foreach($dummyArray as $key => $value){
        
        if($value){
            for($i=1;$i<=$value;$i++){
                array_push($newArray,$key);
            }
        }
    }
    
    return $newArray;
}

function getMax($array){
    // by php function min, max
    return max($array);
    // $max = $array[0];
    // for($i=1; $i < sizeof($array) - 1; $i++){
    //     if($array[$i] > $max){
    //         $max = $array[$i];
    //     }
    // }
    // return $max;
}