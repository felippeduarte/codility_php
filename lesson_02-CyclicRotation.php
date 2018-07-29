<?php

function solution($A, $K) {
	//If there are no rotations, or 1 or no elements, return entry array $A
    if($K == 0 || count($A) <= 1) {
        return $A;
    }

	//Get the minimun equivalent rotations value
	//If there are 2 elements, and 10 rotations, the result would be the same as 2 rotations
    while($K >= count($A)) {
        $K -= count($A);
    }

	//Rotate. Send the last element to the beggining of the array
    while($K > 0) {
        $elem = array_pop($A);
        array_unshift($A, $elem);
        $K--;
    }

    return $A;
}