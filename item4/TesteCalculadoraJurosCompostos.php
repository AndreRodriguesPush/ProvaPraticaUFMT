<?php
$valorAplicado = 100;
$taxa = 5;
$tempo = 8;

function calculaJuroComposto(float $va, float $taxa){    
    
    $VF = ($va * (1 + ($taxa/100))); 
    
    for($i = 1; $i <= $tempo; $i++){ 
        $lucro = ($VF * ($lucro/100));
    }
    return array($lucro);    
}



/* $calculaValorAplicado = calculaJuroComposto($valorAplicado, $taxa);
$lucro = $taxa;

for($x = 1; $x <= $tempo; $x++){     
    echo "\t";   
        echo $i." - ";
        echo "".$calculaValorAplicado." -";
        echo " ".$lucro."";   
   echo "\n";  
   $lucro = ($calculaValorAplicado * ($lucro/100));
   
  // $calculaValorAplicado = ($valorAplicado + $taxa + $lucro);

} */