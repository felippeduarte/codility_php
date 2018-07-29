function solution($A, $K) {
    if($K == 0 || count($A) == 0) {
        return $A;
    }

    while($K >= count($A)) {
        $K -= count($A);
    }

    while($K > 0) {
        $elem = array_pop($A);
        array_unshift($A, $elem);
        $K--;
    }

    return $A;
}