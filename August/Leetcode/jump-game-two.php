<?php

/*
Given an array of non-negative integers nums, you are initially positioned at the first index of the array.
Each element in the array represents your maximum jump length at that position.
Your goal is to reach the last index in the minimum number of jumps.
You can assume that you can always reach the last index.
Example 1:

Input: nums = [2,3,1,1,4]
Output: 2
Explanation: The minimum number of jumps to reach the last index is 2. Jump 1 step from index 0 to 1, then 3 steps to the last index.
Example 2:

Input: nums = [2,3,0,1,4]
Output: 2
 
Constraints:
1 <= nums.length <= 104
0 <= nums[i] <= 1000

*/

$nums = [2,3];
print_r(jump($nums));
function jump($nums){
    $Nlen = count($nums) - 1;
    $curr = -1;
    $ans = $nxt = $i = 0;
    while ($nxt < $Nlen){
        if($i > $curr){
            $ans += 1;
            $curr = $nxt;
        }
        $nxt = max([$nxt, $nums[$i] + $i]);
        $i += 1;
    }
    return $ans;
    $arrLength = count($nums);
    if($arrLength == 1){
        return 0;
    } 
    if($arrLength <= 2) return 1;
    $counter = 1;
    $currentIndex = 0;
    $lastIndex = $arrLength-1;
    // print_r($currentIndex < $lastIndex); die;
    while($currentIndex < $lastIndex){
        $i = $currentIndex;
        //j=1;
        //j<=2
        $max = $i+1;
        for($j=$i+1;$j<=$nums[$i];$j++){
            if($nums[$j] >= $nums[$max]){
                $max = $j;
            }
            //if(3 >= (5-1-1))
            echo $j." ==> j</br>";
        }
        if($nums[$max] >= ($arrLength - $max - 1)){
            return ++$counter;
        }
        $counter++;
        $currentIndex = $max;
    }
    return $counter;
}