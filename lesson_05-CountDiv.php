function solution($A, $B, $K) {
    //let's check if the first number is divisible
    $firstDivisible = (int)($A % $K == 0);
    
    //get the greater number possible divisions
    $maxDivisions = floor($B / $K);
    
    //get the minimun number possible divisions
    $minDivisions = floor($A / $K);
    
    return (int)($maxDivisions - $minDivisions) + $firstDivisible;
}