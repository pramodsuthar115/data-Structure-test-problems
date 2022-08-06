<?php


$first = 0;
$second = 1;
$seriesLength = 50;

$response = getFibonacciSequence($first, $second, $seriesLength);
print_r(printArray($response));

function printArray($response){
    foreach($response as $key => $value){
        print_r($key." => ".$value);
        echo "<br>";
    }
}
function getFibonacciSequence($first, $second, $seriesLength){
    $series[0] = $first;
    $series[1] = $second;
    for($i = 2; $i<=$seriesLength; $i++){
        $series[$i] = $series[$i-1] + $series[$i-2];
    }
    return $series;
}