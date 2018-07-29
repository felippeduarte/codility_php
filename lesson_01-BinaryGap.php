<?php

function solution($N) {
	//convert to binary
    $bin = decbin($N);
	//remove trailling zeroes
    $bin = trim($bin,'0');
	//convert to array
    $bin = str_split($bin);

    $count = 0;
    $maxCount = 0;

	//foreach array element, get the biggest zero sequence count
    foreach($bin as $number) {
        if($number === '0') {
            $count++;
        } else {
            if($count > $maxCount) {
                $maxCount = $count;
            }
            $count = 0;
        }
    }
    
    return $maxCount;
}