<?php
$input = "a4b9cd2r5x";
print_r("Input => ".$input);
echo "</br>";   
$output = $input[0];
for($i=1; $i < strlen($input);$i++){
    $current = $input[$i];
    $previous = $input[$i-1];
    if((int)$current>1){
        for($j=1;$j<$current;$j++){
            $output .= $previous;
        }
    } else {
        $output .= $current;
    }
}


print_r("Output ==> ".$output);   