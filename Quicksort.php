<?php
require "./RandomArray.php";

class sort{

    public function quick_sort($array){
        $low = $high = array();
        if(count($array)<2)
        {
            return $array;
        }

        $pivotKey = key($array);
        $pivot = array_shift($array);

        foreach($array as $value)
        {
            if($value <= $pivot)
            {
                $low[] = $value;   
            } 
            elseif($value > $pivot)
            {
                $high[] = $value;
            }
        }

        $lowArray = $this->quick_sort($low);
        $highArray = $this->quick_sort($high);
        return array_merge($lowArray,array($pivotKey=>$pivot),$highArray);
    }
}

$QuickSort = new sort();
print_r($QuickSort->quick_sort(createArray(50)));


// function quick_sort($my_array)
//  {
// 	$loe = $gt = array();
// 	if(count($my_array) < 2)
// 	{
// 		return $my_array;
// 	}
// 	$pivot_key = key($my_array);
// 	$pivot = array_shift($my_array);
// 	foreach($my_array as $val)
// 	{
// 		if($val <= $pivot)
// 		{
// 			$loe[] = $val;
// 		}elseif ($val > $pivot)
// 		{
// 			$gt[] = $val;
// 		}
// 	}
// 	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
// }

// function partition($array, $low, $high){
//     $pivot = $array[$low];
//     $i = $low+1;
//     $j = $high;
//     print_r($pivot);
//     echo "</br>";
    
//     // do{
//         while($array[$i]<=$pivot){
//             $i++;
//         }
//         while($array[$j]>$pivot){
//             $j--;
//         }
    
//         if($i<$j){
//             $temp = $array[$i];
//             $array[$i] = $array[$j];
//             $array[$j] = $temp;
//         }
//     // } while($i<$j);

//     $temp = $array[$low];
//     $array[$low] = $array[$j];
//     $array[$j] = $temp;
//     return $j;
// }
// function QuickSort($array, $low,$high){
//     print_r("QuickSort round ".$low."</br>");
//     if($low<$high){
//         $partitionIndex = partition($array, $low, $high);
//         print_r($partitionIndex.' </br>');
//         QuickSort($array,$low, $partitionIndex-1);
//         QuickSort($array,$partitionIndex+1, $high);
//     }
    
// }