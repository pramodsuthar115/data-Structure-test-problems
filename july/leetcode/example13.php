<?php

// Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.
// Note that you must do this in-place without making a copy of the array.
// Example 1:

// Input: nums = [0,1,0,3,12]
// Output: [1,3,12,0,0]
// Example 2:

// Input: nums = [0]
// Output: [0]

// Constraints:
// 1 <= nums.length <= 104
// -231 <= nums[i] <= 231 - 1
// Follow up: Could you minimize the total number of operations done?

$nums = [0,1,0,3,12];
class solution{
    public function moveZeroes($nums){

        if(in_array(0,$nums)){
            foreach($nums as $key => $num){
                if($num == 0){
                    $nums[] = 0;
                    unset($nums[$key]);
                }
            }
        }


        // array_values($nums);

        // return array_values($nums);
    }
}

$solution = new solution();
print_r($solution->moveZeroes($nums));