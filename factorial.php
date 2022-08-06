<?php

$no = 5;
$fact = 1;
for($i=1;$i<=$no;$i++){
    $fact = $fact * $i;
}

echo "Factorial of $no is : ";
print_r($fact);


// add upto inserted prime number
function getPrimeNumber($primeNumber){
    return ($primeNumber * ($primeNumber + 1))/2;
}

$primeNumber = 10000;
echo "<br> Total of $primeNumber is : ";
print_r(getPrimeNumber($primeNumber));