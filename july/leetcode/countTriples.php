<?php

// A square triple (a,b,c) is a triple where a, b, and c are integers and a2 + b2 = c2.
// Given an integer n, return the number of square triples such that 1 <= a, b, c <= n.


// Input: n = 5
// Output: 2
// Explanation: The square triples are (3,4,5) and (4,3,5).

// n = 5 1+2=3
print_r(countTriples(249));
function countTriples($n) {
    $result = 0;
    
    for ($i = 1; $i <= $n; $i++) {
        
        $ii = $i * $i;
        
        for ($j = 1; $j <= $n; $j++) {
            if ($ii + $j * $j > $n * $n) {
                continue;
            }
            
            $temp = $i * $i + $j * $j;
            
            for ($k = 1; $k <= $n; $k++) {
                if ($temp == $k * $k) {
                    ++$result;
                }
            }   
        }   
    }
    
    return $result;
}
function cousntTriples($n){
    $outputArray = [];
    $counter = 0;
    for($i=1;$i<=$n-2;$i++)
    {
        for($j=$i;$j<=$n-1;$j++)
        {
            for($k = $j; $k <= $n; $k++)
            {
                if(pow($i,2) + pow($j,2) == pow($k,2))
                {
                    $outputArray[] = [$i,$j,$k];
                    $outputArray[] = [$j,$i,$k];    
                    $counter++;
                }
            }
        }
    }
    return $counter;
}