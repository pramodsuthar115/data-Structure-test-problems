<?php
// PHP implementation of the above approach

// Function to print the output
function printTheArray($arr, $n)
{
    
	for ($i = 0; $i < $n; $i++)
	{
		echo $arr[$i], " ";
	}
	echo "\n";
}

// Function to generate all binary strings
function generateAllBinaryStrings($n, $arr, $i)
{
	if ($i == $n)
	{
		printTheArray($arr, $n);
        echo "<br>";
		return;
	}

	// First assign "0" at ith position
	// and try for all other permutations
	// for remaining positions
	$arr[$i] = 0;
	generateAllBinaryStrings($n, $arr, $i + 1);

	// And then assign "1" at ith position
	// and try for all other permutations
	// for remaining positions
	$arr[$i] = 1;
	generateAllBinaryStrings($n, $arr, $i + 1);
}

// Driver Code
$n = 4;

$arr = array_fill(0, $n, 0);

// Print all binary strings
generateAllBinaryStrings($n, $arr, 0);

// This code is contributed by Ryuga
?>

<!-- <input type="number" min="1" name="">
<div class="binaryString"></div> -->