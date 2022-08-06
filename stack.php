<?php
class Stack
{
    public $size = array();
    public $item = 5;
    public $point = 0;

    public function push($data){
        if($this->point >= $this->item){
            echo "Stack is over and you can't enter more values"; exit();
        } else {
            $this->size[$this->point] = $data;
            $this->point++;
        }
    }
    public function pop(){
        if(empty($this->size)){
            echo "No data is available in array"; exit();
        } else {
            array_pop($this->size);
            $this->point--;
        }
    }
}


$stack = new Stack();
$stack->push("10");
$stack->push("20");
$stack->push("30");
$stack->push("50");
$stack->push("40");
$stack->pop();
$stack->push("80");


print_r($stack);
?>