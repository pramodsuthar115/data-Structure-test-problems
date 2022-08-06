<?php
$input = "aaaabbbbbbbbbcddrrrrrx";
print_r("Input => ".$input);
echo "</br>";   
$output = $input[0];
$count = 1;
for($i=1; $i < strlen($input);$i++){
    $current = $input[$i];
    $previous = $input[$i - 1];
    if($current == $previous){
        $count++;
    } else {
        if($count > 1){
            $output .= $count;
            $count = 1;
        }
        $output .= $current;
    }
}
if($count > 1){
    $output .= $count;
}

print_r("Output ==> ".$output);   