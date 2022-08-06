<?php

// Given a 0-indexed integer array nums, return true if it can be made strictly increasing after removing exactly 
// one element, or false otherwise. If the array is already strictly increasing, return true.
// The array nums is strictly increasing if nums[i - 1] < nums[i] for each index (1 <= i < nums.length).

// Input: nums = [1,2,10,5,7]
// Output: true
// Explanation: By removing 10 at index 2 from nums, it becomes [1,2,5,7].
// [1,2,5,7] is strictly increasing, so return true.


// print_r(canBeIncreasing([1,2,10,5,7]));
print_r(canBeIncreasing([1,1,1]));

function canBeIncreasing($nums){
    $cnt = 0;
    for ( $i = 1; $i < Count($nums); $i++ ) {
        if ($nums[$i - 1] >= $nums[$i]) {
            $cnt++;
            if ($i > 1 && $nums[$i - 2] >= $nums[$i]) {
                $nums[$i] = $nums[$i - 1];
            }
        }
    }
    return $cnt < 2;
}


// backup function
function canBeIncreasingsds($nums) {
    if(count($nums) !== count(array_unique($nums)))
        return false;

    if(count($nums) <=2){
        return true;
    }
    $counter=[];
    $count = COUNT($nums);  
    for($i=0;$i<$count-1;$i++)
    {
        if($nums[$i] >= $nums[$i+1])
        {
            $counter[] = $i;
        }
    }
    
    if(COUNT($counter) > 0)
    {
        foreach($counter as $key => $each)
        {
            $currentArray = $nums;
            unset($currentArray[$each]);
            $currentArray = array_values($currentArray);
            $newArray = array_values($currentArray);
            sort($newArray);
            
            if($currentArray == $newArray){
                return true;
            }
        }
    } else {
        $sorted = array_values($nums);
        sort($sorted);
    
        if($nums == $sorted){
            return 1;
        }
    }
    return false;
}