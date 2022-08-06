<?php

/*
You are given an m x n binary matrix grid. An island is a group of 1's (representing land) connected 4-directionally (horizontal or vertical.) You may assume all four edges of the grid are surrounded by water.
The area of an island is the number of cells with a value 1 in the island.
Return the maximum area of an island in grid. If there is no island, return 0.
Input: grid = [[0,0,1,0,0,0,0,1,0,0,0,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,1,1,0,1,0,0,0,0,0,0,0,0],[0,1,0,0,1,1,0,0,1,0,1,0,0],[0,1,0,0,1,1,0,0,1,1,1,0,0],[0,0,0,0,0,0,0,0,0,0,1,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,0,0,0,0,0,0,1,1,0,0,0,0]]
Output: 6
Explanation: The answer is not 11, because the island must be connected 4-directionally.
Example 2:

Input: grid = [[0,0,0,0,0,0,0,0]]
Output: 0

Constraints:
m == grid.length
n == grid[i].length
1 <= m, n <= 50
grid[i][j] is either 0 or 1.
*/


class solution{
    public $visited = array();
    public $image;
    public $counter =0;
    public function maxAreaOfIsland($image){
        $this->image = $image;
        $x = count($this->image);
        $y = count($this->image[0]);
        $max= 0;
        for($i= 0;$i<$x;$i++){
            for($j= 0;$j<$y;$j++){
                $max = max(array($max,$this->dfs($i,$j,$x,$y)));
            }
        }
        return $max;
    }
    
    public function dfs($i,$j,$n,$m){
        if($i<0 || $j<0 || $i>=$n || $j>=$m || !$this->image[$i][$j]) {
            return;
        }
        $counter = 0;
        $counter++;
        $this->image[$i][$j] = "*";

        $counter += $this->dfs($i+1,$j,$n,$m);
        // $counter += $this->dfs($i-1,$j,$n,$m);
        $counter += $this->dfs($i,$j+1,$n,$m);
        // $counter += $this->dfs($i,$j-1,$n,$m);
        
        return $counter;
    }
}
$image = [[0,0,1,0,0,0,0,1,0,0,0,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,1,1,0,1,0,0,0,0,0,0,0,0],[0,1,0,0,1,1,0,0,1,0,1,0,0],[0,1,0,0,1,1,0,0,1,1,1,0,0],[0,0,0,0,0,0,0,0,0,0,1,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,0,0,0,0,0,0,1,1,0,0,0,0]];
$image = [[0,0,0,0,0,1,0,1,0]];
$solution = new solution();
print_r($solution->maxAreaOfIsland($image));