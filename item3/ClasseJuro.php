<?php

class Juro
{

    private $valorPresente;

    private $taxa;

    private $tempo;
    
    public function create(float $valoPresente, float $taxa, int $tempo)
    {
        $this->valorPresente = $valoPresente;
        $this->taxa = $taxa;
        $this->tempo = $tempo;
    }   

    public function getValorPresente(): float
    {
        return $this->valorPresente;
    }

    public function getTaxa(): float
    {
        return $this->taxa;
    }

    public function getTempo(): int
    {
        return $this->tempo;
    }

    public function setValorPresente(float $valorPresente): float
    {
        $this->valorPresente = $valorPresente;
    }

    public function setTaxa(float $taxa): float
    {
        $this->taxa = $taxa;
    }

    public function setTempo(int $tempo): int
    {
        $this->tempo = $tempo;
    }

    public function calcularJuroSimples(float $valorP, float $taxa, int $tempo): float
    {
        $VF = $valorP * (1 + ($taxa / 100) * $tempo);
        
        return $VF;
    }

    public function calcularJuroComposto(float $valorP, float $taxa, int $tempo): float
    {
        $VFC = $valorP * (1 + ($taxa / 100) /* ^ $tempo */);
        
      /*   $taxa = $taxa / 100;
        
        $VFC = $valorP * pow((1 + $taxa), $tempo);
        
        $VFC = number_format($VFC / $tempo, 2, ",", ".");
 */        
        return $VFC;
    }
}
