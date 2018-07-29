<?php

function solution($A) {
	//if array has only one element, return itself
    if(count($A) == 1) {
        return $A[0];
    }
    
	//sort the array
    sort($A);
    $c = count($A)-1;
	//if the second next element is different, it means that is the single one
	// [0,0,1,2,2] => 0 = 0; 1 != 2 => return 1
    for($i = 0; $i < $c; $i= $i+2) {
        if($A[$i] != $A[$i+1]) {
            return $A[$i];
        }
    }
    
    return $A[$c];
}