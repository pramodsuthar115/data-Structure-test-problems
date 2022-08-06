<?php

/*
You are given an array of unique integers salary where salary[i] is the salary of the ith employee.
Return the average salary of employees excluding the minimum and maximum salary. Answers within 10-5 of the actual answer will be accepted.

Input: salary = [4000,3000,1000,2000]
Output: 2500.00000
Explanation: Minimum salary and maximum salary are 1000 and 4000 respectively.
Average salary excluding minimum and maximum salary is (2000+3000) / 2 = 2500

Constraints:
3 <= salary.length <= 100
1000 <= salary[i] <= 10 power 6
All the integers of salary are unique.
*/
$nums = [1,2,3,4];
print_r(array_unique($nums));
print_r($nums);
print_r(array_unique($nums) == count($nums));
$salary = [4000,3000,1000,2000];
print_r(avgSalary($salary));
function avgSalary($salary){

    // by php functions
    sort($salary);
    array_pop($salary);
    unset($salary[0]);
    return array_sum($salary) / count($salary);

    // by php custom array and iterations
    $totalSalary = 0;
    $min = $max = $salary[0];
    foreach($salary as $rec){
        $totalSalary += $rec;
        if($rec > $min){
            $min = $rec;
        } 
        if($rec < $max){
            $max = $rec;
        }
    }
    return (($totalSalary - ($min + $max))/(count($salary) - 2));
}