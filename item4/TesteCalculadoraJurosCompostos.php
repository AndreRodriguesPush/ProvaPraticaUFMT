<?php
$valorAplicado = 100;
$taxa = 5;
$tempo = 8;

function calculaJuroComposto(float $vp, float $i, int $n){          
    $lucro = array();    
    for($m = 0; $m <= $n; $m++){
        $VF = ($vp * (1 + ($i/100)) ** $m);        
        array_push($lucro, $VF);
    }
    return $lucro;    
}

$valorAplicadoCorrigido = calculaJuroComposto($valorAplicado, $taxa, $tempo);  
//Percorre Lista Calculo Juro Composto
for ($x = 1; $x < count($valorAplicadoCorrigido); $x++){    
    if($x == 1 ){
        $lucro = $valorAplicadoCorrigido[$x] - $valorAplicado;
    }   else {
        $lucro = $valorAplicadoCorrigido[$x] - $valorAplicadoCorrigido[$x-1];
    }
    
    echo $x." - ".$valorAplicadoCorrigido[$x] ." - ".$lucro;
    
    echo "\n";
}

