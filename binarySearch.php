<?php
// To do binary search the array should be on descending or ascending order.
function binarySearch($array, $n, $findMe)
{
    $left = 0;
    $right = $n - 1;

    while($left <= $right ){
        $mid = ($left + $right) / 2;
        if($array[$mid] == $findMe){
            return $mid;
        }

        if($array[$mid] < $findMe){  // for this logic we need the array in sorted.
            $left = $mid + 1;
        }else{
            $right =  $mid - 1;
        }
    }
    return -1;
}
$array = [1,2,3,4,5];
$n = 5;
$findMe = 4;
echo binarySearch($array, $n, $findMe);