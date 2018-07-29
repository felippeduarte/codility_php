<?php

function solution($N) {
    $bin = decbin($N);
    $bin = trim($bin,'0');
    $bin = str_split($bin);

    $count = 0;
    $maxCount = 0;

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