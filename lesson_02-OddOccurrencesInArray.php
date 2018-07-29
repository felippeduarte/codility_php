function solution($A) {
    if(count($A) == 1) {
        return $A[0];
    }
    
    sort($A);
    $c = count($A)-1;
    for($i = 0; $i < $c; $i= $i+2) {
        if($A[$i] != $A[$i+1]) {
            return $A[$i];
        }
    }
    
    return $A[$c];
}