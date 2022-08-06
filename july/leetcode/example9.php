<?php

// You are a product manager and currently leading a team to develop a new product. Unfortunately, the latest version of your product fails the quality check. Since each version is developed based on the previous version, all the versions after a bad version are also bad.
// Suppose you have n versions [1, 2, ..., n] and you want to find out the first bad one, which causes all the following ones to be bad.
// You are given an API bool isBadVersion(version) which returns whether version is bad. Implement a function to find the first bad version. You should minimize the number of calls to the API.

// Example 1:
// Input: n = 5, bad = 4
// Output: 4
// Explanation:
// call isBadVersion(3) -> false
// call isBadVersion(5) -> true
// call isBadVersion(4) -> true
// Then 4 is the first bad version.
// Example 2:

// Input: n = 1, bad = 1
// Output: 1

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    public function isBadVersion($version){
        if($version < 4){
            return false;
        }
        return true;
    }
    public function firstBadVersion($n) {
        $start = 0;
        $end = $n;
        while($start <= $end){
            $mid = ceil(($start+$end)/2);
            $current = $this->isBadVersion($mid);
            $next = $this->isBadVersion($mid+1);
            if( $current == false && $next == true){
                return $mid+1;
            } elseif( $current == false && $next == false){
                $start = $mid+1;
            } else {
                $end = $mid-1;
            }
            
            
        }
    }
}

$solution = new Solution();
print_r($solution->firstBadVersion(5));