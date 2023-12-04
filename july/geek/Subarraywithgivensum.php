<?php


$array = array(1,2,5,8,7,4,9); $s = 25;
print_r(subarraywithgivensum($array, count($array), $s));
function subarraywithgivensum($array, $n, $s){
    print_r($array); echo "</br>";
    $indexArray = array();
    for($i=0;$i<$n;$i++){
        $sum = 0;
        $a = $b = "";
        for($j=$i;$j<$n;$j++){
            $sum += $array[$j];
            print_r($sum); echo "</br>";
            if($sum == $s){
                $a= $i;
                $b= $j;
                array_push($indexArray, $a+1);
                array_push($indexArray, $b+1);
                return $indexArray;
            }
            if($sum > $s){
                break;
            }
        }
    }
    array_push($indexArray, "-1");
    return $indexArray;
}