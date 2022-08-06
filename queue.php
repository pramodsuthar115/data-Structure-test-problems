<?php 
class Queue
{
    public $size;
    public $item;
    public $point;

    public function __construct($item=10){
        $this->size = array();
        $this->item = $item; //size of the array 
        $this->point = 0;
    }

    public function push($data){
        if($this->point >= $this->item){
            echo "Queue is already at his upto the marks"; exit();
        } else {
            $this->size[$this->point] = $data;
            $this->point++;
        }
    }
    public function pop(){
        if(empty($this->size)){
            echo "No data is available in array"; exit();
        } else {
            $node = array_shift($this->size);
            $this->point--;
            return $node;
        }
    }

}

// $queue = new Queue();
// print_r($queue->size);
// echo "</br>";
// $queue->push("15");
// $queue->push("30");
// $queue->push("45");
// $queue->push("60");
// $queue->push("75");
// print_r($queue->size);
// echo "</br>";
// $queue->pop();
// $queue->pop();

// $queue->push("15");
// $queue->push("30");

// print_r($queue->size);
// echo "</br>";
?>