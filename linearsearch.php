<?php

class Linear{

    public $array;
    public $min;
    public $max;
    public $mid;

    public function search($arr, $element){
        $elementExists = false;
        foreach($arr as $key => $value){
            if($value == $element){
                $elementExists = true;
                echo "</br>";
                echo $element." has found at index no ".$key;
            }
        }

        if(!$elementExists){
            echo "No data found please search another value";
        }
        echo "</br>";
        echo "</br>";
    }

    public function createArray($length){
        for($i=0;$i<$length;$i++){
            $this->array[] = rand(00,99);
        }
    }

    public function binarySearch($element){
        sort($this->array);
        print_r($this->array);
        echo "</br>";
        $this->min = 0;
        $this->max = COUNT($this->array);
        while($this->min<=$this->max){
            $this->mid = ceil(($this->max + $this->min)/2);
            if($element == $this->array[$this->mid]){
                return $element." has found at index no ".$this->mid;
            }
    
            if($this->array[$this->mid] < $element ){
                $this->min = $this->mid + 1;
            } else {
                $this->max = $this->mid - 1;
            }
        }
        return "data not found";
    }
}

$linear = new Linear();
$linear->createArray(15);
print_r($linear->array);
echo "</br>";
$linear->search($linear->array, 45);

// working to implement binary search
print_r($linear->binarySearch(45));