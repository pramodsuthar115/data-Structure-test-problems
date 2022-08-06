<?php
class Solutions {

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2) {
        $permutationArray = array();
        $permutationArray = $this->permutation($permutationArray, $s1, 0, strlen($s1)-1);
        print_r($permutationArray);
        foreach($permutationArray as $string){
            if(strpos($s2, $string)){
                return true;
            }
        }
        return false;
    }
    function permutation($permutationArray,$str, $l, $r){
        if($l == $r){
            $permutationArray[] = $str;
        } else {
            
            for($i=$l;$i<= $r;$i++){
                $str = $this->swap($str, $l, $i);
                $this->permutation($permutationArray,$str, $l+1, $r);
                $str = $this->swap($str, $l, $i);
            }
        }
        return $permutationArray;
    }
    function swap($str, $l, $r){
        $temp = $str[$l];
        $str[$l] = $str[$r];
        $str[$r] = $temp;
        return $str;
    }
}
// $str = "ABC";
// $string = "asdghasdfshdfasdfasdfasdasacb";
// $solution = new Solutions();
// print_r($solution->checkInclusion($str, $string));

// die;
class Solution{
    public $permutation;
    public function __construct(){
        $this->permutationArray = array();
    }

    public function permutation($str, $l, $r){

        if($l == $r){
            $this->permutationArray[] = $str;
        } else {
            for($i=$l;$i<= $r;$i++){
                $str = $this->swap($str, $l, $i);
                $this->permutation($str, $l+1, $r);
                $str = $this->swap($str, $l, $i);
            }
        }
    }

    public function swap($str, $l, $r){
        $temp = $str[$l];
        $str[$l] = $str[$r];
        $str[$r] = $temp;
        return $str;
    }
    
    public function checkInclusion($s1, $s2){
        $stringLength = strlen($s1);
        $freqS1 = $freqS2 = [];
        for($i=0;$i<$stringLength;$i++){
            $freqS1[$s1[$i]]++;
            print_r($freqS1);
        }

        $i = $j =0;
        while($j<strlen($s2)){
            $freqS2[$s1[$j]]++;
            if($j-$i+1 == $stringLength){
                for($k=0; $k<26; $k++){
                    if($s1[$k]!=$s2[$k]) return false;
                }
                return true;
            }
            if($j-$i+1<strlen($s1)) $j++;
            else{
                $freqS2[$s2[$i]]--;
                $i++;
                $j++;
            }

        }
        return false;


        // if(strlen($s1)<=1){
        //     $position = strpos($s2, strtolower($s1));
        //     if($position === 0 || $position > 0){
        //         return true;
        //     }
        //     return false;
        // }
        // $this->permutation(strtolower($s1), 0, strlen($s1) -1);

        // // print_r($this->permutationArray);
        // foreach($this->permutationArray as $string){
        //     $position = strpos($s2, strtolower($string));
        //     // print_r($s2); echo "<br>";
        //     // print_r($string); echo "<br>";
        //     // print_r($position);
        //     if($position >= 0 && $position != null){
        //         return true;
        //     }
        // }
        // return false;
    }
}
$str = "a";
$string = "ab";
$solution = new Solution();
print_r($solution->checkInclusion($str, $string));

