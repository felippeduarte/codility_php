function solution($A) {
    
    $eastSequence = 0;
    $pairOfCars = 0;
    
    $c = count($A);
    //we set equals to count. if non east cars found, the next for loop will not occur
    $firstZeroIndex = $c;
    
    //find the first east car
    for($i = 0; $i < $c; $i++) {
        if($A[$i] === 0) {
            $firstZeroIndex = $i;
            $eastSequence++;
            break;
        }
    }
    
    //for each west car, add as a "pair" the number of east car
    for($i = $firstZeroIndex+1; $i < $c; $i++) {
        if($A[$i] === 1) {
            $pairOfCars += $eastSequence;
        } else {
            $eastSequence++;
        }
    }
    
    return $pairOfCars > 1000000000 ? -1 : $pairOfCars;
    
}