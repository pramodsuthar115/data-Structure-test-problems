<?php
require "./RandomArray.php";

$array = createArray(150);
print_r($array);
        echo "</br>";
        echo "</br>";

print_r(SelectionSort($array));
echo "</br>";

function SelectionSort($array){
    for($i= 0; $i<sizeof($array); $i++){
        $minIndex = $i;
        for($j= $i+1; $j<sizeof($array);$j++){
            if($array[$j]<$array[$i]){
                $minIndex = $j;
            }
        }

        if($minIndex != $j){

            $temp = $array[$minIndex];
            $array[$minIndex] = $array[$i];
            $array[$i] = $temp;
        }
    }
    return $array;
}