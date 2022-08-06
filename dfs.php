<?php

class graph{

    public $visited;
    public $graphArray;

    public function __construct(){
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

    public function DFS($i){
        print_r($i.' </br>');
        $this->visited[$i] = 1;
        for($j=0;$j<sizeof($this->graphArray);$j++){
            if($this->graphArray[$i][$j] == 1 && !$this->visited[$j]){
                $this->DFS($j);
            }
        }
    }
}

$graph = new Graph();
$graph->DFS(0);
// print_r($graphArray);