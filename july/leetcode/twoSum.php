<?php

// [2,7,11,15]
// 9
// [3,1,7,9,2,4]
// 6
// [3,3]
// 6
// $resp = twoSum(array(3,5,6,4,7), 10);
$resp = twoSum([3,2,4], 6);
print_r($resp);
function twoSum($nums, $target) {
    $count = COUNT($nums);
    for($i=1;$i<$count;$i++){
        $firstValue = $nums[$i-1];
        for($j=$i; $j<$count;$j++){
            if($firstValue + $nums[$j]  == $target){
                return array($i-1,$j);
            }
        }
    }
}