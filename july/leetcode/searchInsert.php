<?php

// Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.
// You must write an algorithm with O(log n) runtime complexity.
// Example 1:
// Input: nums = [1,3,5,6], target = 5
// Output: 2
// Example 2:
// Input: nums = [1,3,5,6], target = 2
// Output: 1
// Example 3:
// Input: nums = [1,3,5,6], target = 7
// Output: 4

// Constraints:
// 1 <= nums.length <= 104
// -104 <= nums[i] <= 104
// nums contains distinct values sorted in ascending order.
// -104 <= target <= 104


print_r(searchInsert([1,3,5,6], 8));
function searchInsert($nums, $target){
    $start = 0;
    $end = sizeof($nums) - 1;
    $location = -1;
    
    while ($start <= $end) {
        $mid = ceil(($start + $end)/2);
        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] > $target) {
            $end = $mid - 1;
            $location = $mid;
        } else {
            $location = $start = $mid + 1;
        }
    }
    return $location;
    
}

// function that takes min 23 ms to execute;
function searchInputBackup($nums, $target){
    $start = 0;
        $end = sizeof($nums) - 1;
        if($target > $nums[$end]){
            return sizeof($nums);
        } elseif($target < $nums[0]){
            return 0;
        }
        $mid = (sizeof($nums) - 1) / 2;
        if($mid > 0){
            $mid = ceil($mid);
        }
        while ($start <= $end) {
            if ($nums[$mid] == $target) {
                return $mid;
            } elseif(($nums[$mid] <= $target && $nums[$mid + 1] >= $target)){
                return $mid+1;
            } elseif ($nums[$mid] > $target) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
            $mid = ceil(($start + $end)/2);
        }
}