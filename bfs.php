<?php

include "./queue.php";


class graph{

    public $visited;
    public $graphArray;
    public $queue;

    public function __construct(){
        $this->queue = new Queue();
        $this->graphArray = [
            [0,1,1,1,0,0,0],
            [1,0,1,0,0,0,0],
            [1,1,0,1,1,0,0],
            [1,0,1,0,1,0,0],
            [0,0,1,1,0,1,1],
            [0,0,0,0,1,0,0],
            [0,0,0,0,1,0,0]
        ];
        $this->visited = array_fill(0, sizeof($this->graphArray),0);
    }
    

    public function printGraphArray(){
        foreach($this->graphArray as $key => $each){
            print_r($each);
            echo "</br>";
        }
    }

    public function BFS($i){
        
        print_r($i.' </br>');
        $this->visited[$i] = 1;
        $this->queue->push($i);
        while(!empty($this->queue->size)){
            // print_r($this->queue);
            $node = $this->queue->pop();
            for($j=0;$j<sizeof($this->graphArray);$j++){
                if($this->graphArray[$node][$j] == 1 && !$this->visited[$j]){
                    print_r($j.' </br>');
                    $this->visited[$j] = 1;
                    $this->queue->push($j);
                }
            }
            
        }

    }
}

$graph = new Graph();
$graph->BFS(5);
// print_r($graphArray);