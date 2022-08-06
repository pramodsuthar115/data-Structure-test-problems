<?php

$input = "3[abc]4[a4[bc]c]";
print_r("Input => ".$input);
echo "</br>";

$output = "";
for($i=0;$i<strlen($input);$i++){
    $current = $input[$i];
    if((int)$current){
        $startFrom = strpos($input,'[',$i) +1;
        $endTo = strpos($input,']',$i)-2;
        $string = substr($input,$startFrom,$endTo);
        if(!empty($string)){
            // for($i=0;$i<strlen($string);$i++){
            //     $output .= $string;
            // }
        }
        echo $endTo." string => ".strlen($string);
    }
}

print_r("Output => ".$output);
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


$input = "3[abc]4[ab]c";
print_r("Input => ".$input);
echo "</br>";   
$output = "";

$stringInput = str_replace('[','',$input);
// $stringInput = str_replace(']','',$stringInput);

$stringArray = explode("]",$stringInput);
$output = "";

foreach($stringArray as $key => $each){
    // print_r("SDSDSD ".$each." </br>");
    if(!empty($each)){
        $firstkey = $each[0];
        if((int)$firstkey>1){
            $string = substr($each,1,strlen($each));
            for($i=0;$i<$firstkey;$i++){
                $output .= $string;
            }
        } else {
            $output .= $each;
        }
    }
}
// echo "</br>";   
// print_r("Output ==> ".$output);   