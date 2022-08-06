<?php

// Given a string s, find the length of the longest substring without repeating characters.

// Example 1:

// Input: s = "abcabcbb"
// Output: 3
// Explanation: The answer is "abc", with the length of 3.
// Example 2:

// Input: s = "bbbbb"
// Output: 1
// Explanation: The answer is "b", with the length of 1.
// Example 3:

// Input: s = "pwwkew"
// Output: 3
// Explanation: The answer is "wke", with the length of 3.
// Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.
 

// Constraints:

// 0 <= s.length <= 5 * 104
// s consists of English letters, digits, symbols and spaces.


$string = 'dvdf';

// lengthOfLongestSubstring($string);
print_r(lengthOfLongestSubstring($string));
function lengthOfLongestSubstring($string)
{
    $left = $right = $res = 0;
    $chars = array();

    while($right < strlen($string))
    {
        $r = substr($string, $right,1);
        $chars[$r]++;
        while($chars[$r] > 1){
            $l = substr($string, $left,1);
            $chars[$l]--;
            $left++;
        }
        $res = max(array($res,$right-$left+1));
        $right++;
    }
    return $res;
}

function printArray($array)
{
    foreach($array as $key => $value)
    {
        print_r($value);
        echo "</br>";
    }
}

function lengthOfLongestSubstringBackup($string)
{
    if (strlen($string) <= 1 ) return strlen($string);
    $stringLength = strlen($string);
    $uniqueStringArray = $counterArray = [];

    for($i=0;$i<$stringLength;$i++)
    {
        $input = $string[$i];
        if(in_array($input  ,$counterArray)){
            $uniqueStringArray[] = $counterArray;
            $counterArray = [];
        }
        array_push($counterArray, $string[$i]);
    }

    $max = COUNT($counterArray);
    foreach($uniqueStringArray as $key => $value)
    {
        if(count($value) > $max){
            $max = COUNT($value);
        }
    }
    return $max;
}