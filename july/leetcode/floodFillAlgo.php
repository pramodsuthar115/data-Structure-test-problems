<?php

/*
An image is represented by an m x n integer grid image where image[i][j] represents the pixel value of the image.
You are also given three integers sr, sc, and color. You should perform a flood fill on the image starting from the pixel image[sr][sc].
To perform a flood fill, consider the starting pixel, plus any pixels connected 4-directionally to the starting pixel of the same color as the starting pixel, plus any pixels connected 4-directionally to those pixels (also with the same color), and so on. Replace the color of all of the aforementioned pixels with color.
Return the modified image after performing the flood fill.
Example 1:
Input: image = [[1,1,1],[1,1,0],[1,0,1]], sr = 1, sc = 1, color = 2
Output: [[2,2,2],[2,2,0],[2,0,1]]
Explanation: From the center of the image with position (sr, sc) = (1, 1) (i.e., the red pixel), all pixels connected by a path of the same color as the starting pixel (i.e., the blue pixels) are colored with the new color.
Note the bottom corner is not colored 2, because it is not 4-directionally connected to the starting pixel.
Example 2:

Input: image = [[0,0,0],[0,0,0]], sr = 0, sc = 0, color = 0
Output: [[0,0,0],[0,0,0]]
Explanation: The starting pixel is already colored 0, so no changes are made to the image.
Constraints:
m == image.length
n == image[i].length
1 <= m, n <= 50
0 <= image[i][j], color < 216
0 <= sr < m
0 <= sc < n
*/


class solution{
    public $visited = array();
    public $image;
    public function __construct($image,$sr,$sc,$color){
        $this->image = $image;
        $this->floodFill($this->image,$sr,$sc,$color);
    }
    public function floodFill($image, $sr, $sc, $color){
        $x = count($this->image);
        $y = count($this->image[0]);
    
        $visitedX = array_fill(0,$y,0);
        for($i= 0;$i<$x;$i++){
            $this->visited[] = $visitedX; 
        }
        $oldColor = $this->image[$sr][$sc];
        $this->dfs($sr,$sc,$color,$x,$y,$oldColor);

        return $this->image;
    }
    
    public function dfs($i,$j,$color,$n,$m,$oldColor){
        if($i<0 || $j<0 || $i>=$n || $j>=$m) return;
        if($this->visited[$i][$j] || $this->image[$i][$j] != $oldColor) return;
        $this->visited[$i][$j] = 1;
        $this->image[$i][$j] = $color;
    
        $this->dfs($i+1,$j,$color,$n,$m,$oldColor);
        $this->dfs($i-1,$j,$color,$n,$m,$oldColor);
        $this->dfs($i,$j+1,$color,$n,$m,$oldColor);
        $this->dfs($i,$j-1,$color,$n,$m,$oldColor);
        
    }
}
$image = [[1,1,1],[1,1,0],[1,0,1]];
$sr = 1;
$sc = 1;
$color = 2;
print_r(new solution($image,$sr,$sc,$color));