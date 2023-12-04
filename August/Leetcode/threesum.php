<?php

/*
Given an integer array nums, return all the triplets 
[nums[i], nums[j], nums[k]] such that i != j, i != k, and j != k, and nums[i] + nums[j] + nums[k] == 0.
Notice that the solution set must not contain duplicate triplets.

Example 1:
Input: nums = [-1,0,1,2,-1,-4]
Output: [[-1,-1,2],[-1,0,1]]
Explanation: 
nums[0] + nums[1] + nums[2] = (-1) + 0 + 1 = 0.
nums[1] + nums[2] + nums[4] = 0 + 1 + (-1) = 0.
nums[0] + nums[3] + nums[4] = (-1) + 2 + (-1) = 0.
The distinct triplets are [-1,0,1] and [-1,-1,2].
Notice that the order of the output and the order of the triplets does not matter.
Example 2:
Input: nums = [0,1,1]
Output: []
Explanation: The only possible triplet does not sum up to 0.
Example 3:

Input: nums = [0,0,0]
Output: [[0,0,0]]
Explanation: The only possible triplet sums up to 0.
Constraints:

3 <= nums.length <= 3000
-105 <= nums[i] <= 105
*/


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        print_r($nums); echo "<br>";
        $length = COUNT($nums);
        $ans = [];
        for($i=0;$i<$length-2;$i++){
            for($j=$i+1;$j<$length-1;$j++){
                for($k=$j+1;$k<$length;$k++){
                    // echo $i." => ".$j." => ".$k." <br>";
                    // print_r($nums[$i] + $nums[$j] + $nums[$k]);
                    // echo " <br>";
                    // echo " <br>";
                    // ($nums[$i] != $nums[$j] || $nums[$i] != $nums[$k] && $nums[$j] != $nums[$k]) && 
                    if(($nums[$i] + $nums[$j] + $nums[$k] == 0)){
                        // if(!empty($ans)){
                        //     foreach($ans as $sumArray){

                        //         $SumIndex = [$nums[$i],$nums[$j],$nums[$k]];
                                
                        //         if(array_udiff($sumArray,$SumIndex, function($a,$b){
                        //             print_r($a." ==> ".$b); echo "<br>";
                        //             if($a === $b){
                        //                 return 0;
                        //             }
                        //             return ($a>$b)?1:-1;
                        //         })){
                        //             $ans[] = $SumIndex;
                        //         }
                        //             // print_r($SumIndex); echo "index <br>";
                        //         // echo " <br>";
                        //         // sort($sumArray);
                        //         // print_r( $sumArray);
                        //         // echo " <br>";
                        //         // sort($SumIndex);
                        //         // print_r( $SumIndex);
                        //         // echo " <br>";
                        //         // if($sumArray !== $SumIndex){
                        //         //     $ans[] = $SumIndex;
                        //         // }
                        //         // if(!in_array($nums[$i],$sumArray) || !in_array($nums[$j],$sumArray) || !in_array($nums[$k],$sumArray)){
                        //         //     print_r($SumIndex); echo "index <br>";
                        //         //     print_r($ans); echo "<br>";
                        //         //     $containsAllValues = array_diff($ans, $SumIndex);
                        //         //     // print_r($containsAllValues);
                        //         //     $ans[] = $containsAllValues;
                        //         // }
                        //     }
                        // } else {
                        // }
                        $ans[] = [$nums[$i],$nums[$j],$nums[$k]];
                    }
                }
            }
        }

        // if(!empty($ans)){
        //     echo "<br>";
            print_r(array_diff($ans));
        //     echo "<br>";
        // }
        print_r($ans);
        return $ans;
    }
}


$solution = new Solution();
$input = [-1,0,1,2,-1,-4];
// $input = [0,0,0];
$solution->threeSum($input);