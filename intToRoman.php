<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $total = 0;
        $translations = [
            "I"=> 1,g
            "V"=> 5,
            "X"=> 10,
            "L"=> 50,
            "C"=> 100,
            "D"=> 500,
            "M"=> 1000
        ];
        $s = str_replace("IV", "IIII",$s);
        $s = str_replace("IX", "VIIII",$s);
        $s = str_replace("XL", "XXXX",$s);
        $s = str_replace("XC", "LXXXX",$s);
        $s = str_replace("CD", "CCCC",$s);
        $s = str_replace("CM", "DCCCC",$s);
        
        for($i=0;$i<=strlen($s);$i++){
            $total += $translations[$s[$i]];
        }
        return $total;
    }

    function romanToIntBySwitch($s) {
        $total = 0;
        $total = 0;
        $s = str_replace("IV", "IIII",$s);
        $s = str_replace("IX", "VIIII",$s);
        $s = str_replace("XL", "XXXX",$s);
        $s = str_replace("XC", "LXXXX",$s);
        $s = str_replace("CD", "CCCC",$s);
        $s = str_replace("CM", "DCCCC",$s);
        
        for($i=0;$i<=strlen($s);$i++){
            switch($s[$i]){
                case 'I':
                    $total += 1;
                    break;
                case 'V':
                    $total += 5;
                    break;
                case 'X':
                    $total += 10;
                    break;
                case 'L':
                    $total += 50;
                    break;
                case 'C':
                    $total += 100;
                    break;
                case 'D':
                    $total += 500;
                    break;
                case 'M':
                    $total += 1000;
            }
        }
        return $total;
    }
}