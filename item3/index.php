<?php
require_once 'ClasseJuro.php';

 $juro = new Juro;

 $juro->create(100.0, 10.0, 2);

var_dump($juro); 
 
 $juroSimples = $juro->calcularJuroSimples(1500, 4.99, 1);
 
 echo "Juro Simples: ".mascaraMoeda($juroSimples)."<br/>";

 echo "Juro Composto: ".mascaraMoeda($juro->calcularJuroComposto(100, 5, 8))."<br/>";

 //echo "".$juro->getTempo();
   
function mascaraMoeda (float $valor){
    $retorno = number_format($valor,2,",",".");
    return $retorno;
}
