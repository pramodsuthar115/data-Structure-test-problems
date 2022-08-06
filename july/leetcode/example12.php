<?php
// Given an array, rotate the array to the right by k steps, where k is non-negative.
// Example 1:
// Input: nums = [1,2,3,4,5,6,7], k = 3
// Output: [5,6,7,1,2,3,4]
// Explanation:
// rotate 1 steps to the right: [7,1,2,3,4,5,6]
// rotate 2 steps to the right: [6,7,1,2,3,4,5]
// rotate 3 steps to the right: [5,6,7,1,2,3,4]
// Example 2:

// Input: nums = [-1,-100,3,99], k = 2
// Output: [3,99,-1,-100]
// Explanation: 
// rotate 1 steps to the right: [99,-1,-100,3]
// rotate 2 steps to the right: [3,99,-1,-100]
 
// Constraints:
// 1 <= nums.length <= 105
// -231 <= nums[i] <= 231 - 1
// 0 <= k <= 105

print_r(rotate([1,2],2));
function rotate($nums, $k){
    $n = COUNT($nums);
    if ($k%$n == 0) return $nums;
    if ($k > $n) {
        $k = $k % $n;
    }
    $j = $n - $k;
    $i = 0;
    while ($i < $j) {
        $nums[] = $nums[$i];
        unset($nums[$i]);     
    
        $i++;
    }


    // $first = 0;
    // $middle = $n-$k%$n; 
    // $last = $n;
    // $next = $middle;
    // while($first != $next) {
    //     $swap = $nums[$first];
    //     $nums[$first] = $nums[$next];
    //     $nums[$next] = $swap;
    //     $next++;
    //     $first++;
    //     if ($next == $last) $next = $middle;
    //     else if ($first == $middle) $middle = $next;
    // }
    return array_values($nums);
}
// function rotate($nums, $k){
//     $newArray = $nums;
//     $end = COUNT($nums);
//     array_splice($nums, 0,$end - $k);
//     array_splice($newArray, $end - $k, $end);
//     return array_merge($nums,$newArray);
// }