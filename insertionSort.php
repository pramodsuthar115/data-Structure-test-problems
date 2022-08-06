<?php
require "./RandomArray.php";

$array = createArray(10);
print_r($array);
        echo "</br>";

print_r(InsertionArray($array));
echo "</br>";

function InsertionArray($array){
    for($i= 1; $i<sizeof($array); $i++){
        $key = $array[$i];
        $j = $i-1;
        while($j>=0 && $array[$j] > $key){
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $key;
    }
    return $array;
}



// function InsertionArray($array){
    
//     for($i=1;$i<sizeof($array);$i++){
//         $key = $array[$i];
//         $j = $i-1;
//         while($j >= 0 && $array[$j] > $key){
//             $array[$j+1] = $array[$j];
//             $j--;
//         }
//         $array[$j+1] = $key;

//     }
//     return $array;
// }