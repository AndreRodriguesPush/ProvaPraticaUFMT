<?php
	   	
Class Juro{
    
    private $valorPresente;
    private $taxa;
    private $tempo;
    
    public function create(float $valorPresente, float $taxa, int $tempo){
        $this->valorPresente = $valorPresente;
        $this->taxa = $taxa;
        $this->tempo = $tempo;
    }
    
    /**
     * @return the $valorPresente
     */
    public function getValorPresente():float
    {
        return $this->valorPresente;
    }

    /**
     * @return the $taxa
     */
    public function getTaxa():float
    {
        return $this->taxa;
    }

    /**
     * @return the $tempo
     */
    public function getTempo():int
    {
        return $this->tempo;
    }

    /**
     * @param field_type $valorPresente
     */
    public function setValorPresente(float $valorPresente):float
    {
        $this->valorPresente = $valorPresente;
    }

    /**
     * @param field_type $taxa
     */
    public function setTaxa(float $taxa):float
    {
        $this->taxa = $taxa;
    }

    /**
     * @param field_type $tempo
     */
    public function setTempo(int $tempo):int
    {
        $this->tempo = $tempo;
    }
    
    public function calcularJuroSimples(float $valorP, float $taxa, int $tempo):float{
         
         $VF = $valorP * (1 + ($taxa/100) * $tempo);
        
         return $VF;
    }

    public function calcularJuroComposto(float $valorP,float $taxa, int $tempo):float{
            
        $VFC = $valorP * (1 + ($taxa/100) ^ $tempo);
        
        return $VFC;
    }
          
}
