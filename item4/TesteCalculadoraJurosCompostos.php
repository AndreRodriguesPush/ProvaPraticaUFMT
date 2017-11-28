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

//Percorre Lista Calculo Juro Composto
for ($x = 1; $x <= $tempo; $x++){    
    $valorAplicadoCorrigido = calculaJuroComposto($valorAplicado, $taxa, $tempo);   
    $lucro = $valorAplicadoCorrigido[$x] * ($taxa/100);    
    
    echo "\t";   
       echo $x. " - " . $valorAplicadoCorrigido[$x] . " - " . $lucro;
    echo "\n";
}

