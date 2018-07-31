<?php
/*
This is a demo task.

Write a function:

function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Assume that:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000].
Complexity:

expected worst-case time complexity is O(N);
expected worst-case space complexity is O(N) (not counting the storage required for input arguments).
*/
function solution($A) {
    sort($A);
    $firstPositiveIndex = -1;
    foreach($A as $index => $number) {
        //found first positive element
        if($number == abs($number)) {
            $firstPositiveIndex = $index;
            break;
        }
    }
    
    //no positive values in array
    if($firstPositiveIndex == -1 || $A[$firstPositiveIndex] > 1) {
        return 1;
    }
    
    //we have positive values, let's find the missing one
    $lastElement = $A[$firstPositiveIndex];
    for($i = $firstPositiveIndex, $c = count($A); $i < $c; $i++) {
        if($A[$i] > $lastElement +1) {
            return $lastElement +1;
        }
        $lastElement = $A[$i];
    }
    
    return end($A)+1;
}