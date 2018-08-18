function solution($S, $P, $Q) {
    $result = [];
	
	//para cada M querie
    for ($i = 0, $c = count($P); $i < $c; $i++) {
        $min = min($P[$i],$Q[$i]);
        $length = max($P[$i],$Q[$i]) - $min +1;
		
		//monta a sequence com o intervalo
        $sequence = substr($S, $min, $length);
        
		//verifica um a um, e atribui o fator, do menor para o maior
        if (strpos($sequence, 'A') !== false) {
            $result[$i] = 1;
        } else {
            if (strpos($sequence, 'C') !== false) {
                $result[$i] = 2;
            } else {
                if (strpos($sequence, 'G') !== false) {
                    $result[$i] = 3;
                } else {
                   $result[$i] = 4;
                }
            }
        }
    }
    return $result;
}