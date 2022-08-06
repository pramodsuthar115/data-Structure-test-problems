<?php


// Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.
// Assume the environment does not allow you to store 64-bit integers (signed or unsigned).
// Example 1:
// Input: x = 123
// Output: 321

// Example 2:
// Input: x = -123
// Output: -321

// Example 3:
// Input: x = 120
// Output: 21


$input = -321;
print_r(pow(2,31));
echo "</br>";
print_r(inputReverse($input));
function inputReverse($input)
{
    $reverse = strrev($input);
    if($reverse < pow(-2,31) || $reverse > pow(2,31)){
        return 0;
    }
        
}