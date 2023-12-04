<?php

/*
There are a total of numCourses courses you have to take, labeled from 0 to numCourses - 1. You are given an array prerequisites where prerequisites[i] = [ai, bi] indicates that you must take course bi first if you want to take course ai.

For example, the pair [0, 1], indicates that to take course 0 you have to first take course 1.
Return the ordering of courses you should take to finish all courses. If there are many valid answers, return any of them. If it is impossible to finish all courses, return an empty array.

Example 1:

Input: numCourses = 2, prerequisites = [[1,0]]
Output: [0,1]
Explanation: There are a total of 2 courses to take. To take course 1 you should have finished course 0. So the correct course order is [0,1].
Example 2:

Input: numCourses = 4, prerequisites = [[1,0],[2,0],[3,1],[3,2]]
Output: [0,2,1,3]
Explanation: There are a total of 4 courses to take. To take course 3 you should have finished both courses 1 and 2. Both courses 1 and 2 should be taken after you finished course 0.
So one correct course order is [0,1,2,3]. Another correct ordering is [0,2,1,3].
Example 3:

Input: numCourses = 1, prerequisites = []
Output: [0]
 
Constraints:

1 <= numCourses <= 2000
0 <= prerequisites.length <= numCourses * (numCourses - 1)
prerequisites[i].length == 2
0 <= ai, bi < numCourses
ai != bi
All the pairs [ai, bi] are distinct. 
*/

interface Reptile
{
    public function layEgg() : ReptileEgg;
}

class FireDragon implements Reptile
{
    public function layEgg() : ReptileEgg {
        return new ReptileEgg(new FireDragon());
    }
}

class ReptileEgg
{
    private $hatchCount = 0;
    private $Reptile;
    public function __construct(string $reptileType)
    {
        $this->Reptile = $reptileType;
    }

    public function hatch() : Reptile
    {
        if($this->hatchCount > 0) {
            throw new Exception('The egg already hatched');
        }
        //throw new Exception("Not implemented");
        $this->hatchCount++;
        return $this->Reptile;
    }
}
die;


interface Reptile {
    public function layEgg() : ReptileEgg;
}

class Crocodile implements Reptile
{
    public function layEgg() : ReptileEgg {
        // A new egg will always hatch a new FireDragon
        return new ReptileEgg(new Crocodile());
    }
}
class FireDragon implements Reptile
{
    public function layEgg() : ReptileEgg {
        // A new egg will always hatch a new FireDragon
        return new ReptileEgg(new FireDragon());
    }
}
class lizard implements Reptile //i dont evan know if lizzards lay eggs i would assume so given them being a Reptile
{
    public function layEgg() : ReptileEgg {
        // A new egg will always hatch a new lizard
        return new ReptileEgg(new lizard());
    }
}
class ReptileEgg
{
    private $hatchCount = 0;
    private $Reptile;

    public function __construct($Reptile){
        $this->Reptile = $Reptile;
    }

    public function hatch(){
        //check to see if egg is hatched
        if($this->hatchCount > 0) {
            throw new Exception('The egg already hatched');
        }
        
        $this->hatchCount++;
        return $this->Reptile;
    }
}

$croc = new Crocodile();
$egg = $croc->layEgg();
$childCroc = $egg->hatch();
print("hellow");
print( get_class($childCroc));
print("hi");


die;
function getViewCount(string $jsonString) : int
{
    $json = json_decode($jsonString);
    if(!empty($json) && !empty($json->videos)){
        return array_sum(array_column($json->videos, 'viewCount'));
    }
    return 0;
}

$jsonString = '{
    "apiVersion":"2.1",
    "videos":[
        {
            "id":"253",
            "category":"Music",
            "title":"Jingle Bells",
            "duration":457,
            "viewCount":88270796
        },
        {
            "id":"253",
            "category":"Music",
            "title":"Jingle Bells",
            "duration":457,
            "viewCount":4
        }
    ]
}';

echo getViewCount($jsonString);

die;
class Person
{
    public function __construct(int $height, int $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    public static function calcAvgHeight(array $persons) : float
    {
        if(is_array($persons)){
            $weight = array_column($persons, 'height');
            if(!empty($weight)){
                return array_sum($weight) / count($weight);
            }
        }
        return false;
    }
}        
            
$matt = new Person(190, 69);
$jason = new Person(190, 103);
$jason = new Person(200, 103);
echo Person::calcAvgHeight( [ $matt, $jason ] );



die;
function filterNumbersFromArray(array &$arr) : void
{
    
    foreach($arr as $key => $each){
        if(gettype($each) != "integer"){
            unset($arr[$key]);
        }    
    }
}

$arr = [1, 'a', 'b', "2",2];
filterNumbersFromArray($arr);
print_r(array_values($arr));

die;
$numCourses = 4; 
$prerequisites = [[1,0],[2,0],[3,1],[3,2]];
print_r(findOrder($numCourses, $prerequisites));
function findOrder($numCourses, $prerequisites) {
    $numbers = array();
    $ans = array();
    foreach($prerequisites as $array){
        if(!in_array($array[1], $ans)){
            $ans[] = $array[1];
        } else {

        }
    }
    return $ans;
}