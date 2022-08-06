<?php


// palindrome function
print_r(palindrome(121));
function palindrome($x)
{  
    return strrev($x) == $x;
}
die;
print_r(palindrome(1431));
function palindromse($n)
{  
    $number = $n;
    $sum = 0;  
    while(floor($number)) {  
        $rem = $number % 10;  
        $sum = $sum * 10 + $rem;  
        $number = $number/10;  
    }
    
    return $n == $sum;
}