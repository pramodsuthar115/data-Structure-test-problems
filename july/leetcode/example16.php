<?php

// Given a string s, reverse the order of characters in each word within a sentence while still preserving \
// whitespace and initial word order.
// Example 1:
// Input: s = "Let's take LeetCode contest"
// Output: "s'teL ekat edoCteeL tsetnoc"
// Example 2:
// Input: s = "God Ding"
// Output: "doG gniD"

// Constraints:
// 1 <= s.length <= 5 * 104
// s contains printable ASCII characters.
// s does not contain any leading or trailing spaces.
// There is at least one word in s.
// All the words in s are separated by a single space.

print_r(reverseWords("Let's take LeetCode contest"));
echo "<br>";
function reverseWords($s){
    $s = explode(" ", $s);
    foreach($s as $key => $each){
        $string = !empty($string) ? $string." ".strrev($each) : strrev($each);
    }
    return $string;
    $wordCount = count($s);
    for($i = 0;$i<$wordCount;$i++){
        $l = 0;
        $r = strlen($s[$i]) - 1;
        while($l<=$r){
            $temp = $s[$i][$l];
            $s[$i][$l] = $s[$i][$r];
            $s[$i][$r] = $temp;
            $r--;
            $l++;
        }
    }
    return implode(" ",$s);
}





// Write a function that reverses a string. The input string is given as an array of characters s.
// You must do this by modifying the input array in-place with O(1) extra memory.

// Example 1:
// Input: s = ["h","e","l","l","o"]
// Output: ["o","l","l","e","h"]
// Example 2:
// Input: s = ["H","a","n","n","a","h"]
// Output: ["h","a","n","n","a","H"]
 
// Constraints:
// 1 <= s.length <= 105
// s[i] is a printable ascii character.

print_r(reverString(["h","e","l","l","o"]));
function reverString($s){
    $l = 0;
    $r = count($s) - 1;
    while($l<=$r){
        $temp = $s[$l];
        $s[$l] = $s[$r];
        $s[$r] = $temp;
        $r--;
        $l++;
    }
}