<?php

Class Enemigo{

    private $idEnemigo ;
    private $hpEnemigo ;
    private $atqEnemigo ;
    private $defEnemigo ;

    public function __construct($id, $hp , $atq , $def)
    {
        $this->idEnemigo = $id;
        $this->hpEnemigo = $hp;
        $this->atqEnemigo = $atq;
        $this->defEnemigo = $def;
    }

    public function getIdEnemigo()
    {
        return $this->idEnemigo;
    } 
    public function setIdEnemigo($idEnemigo)
    {
        $this->idEnemigo = $idEnemigo;
    }


    public function getHpEnemigo()
    {
        return $this->hpEnemigo;
    }
    public function setHpEnemigo($hpEnemigo)
    {
        $this->hpEnemigo = $hpEnemigo;
    }

   
    public function getAtqEnemigo()
    {
        return $this->atqEnemigo;
    }
    public function setAtqEnemigo($atqEnemigo)
    {
        $this->atqEnemigo = $atqEnemigo;
    }

    
    public function getDefEnemigo()
    {
        return $this->defEnemigo;
    }
    public function setDefEnemeigo($defEnemeigo)
    {
        $this->defEnemigo = $defEnemeigo;
    }

    


    public function __toString()
    { 
        return "Datos Enemigo: \n" . 
        "Id: " . $this->getIdEnemigo() . "\n".
        "HP: " . $this->getHpEnemigo() . "\n".
        "AtQ: " . $this->getAtqEnemigo() .  "\n".
        "DEF: " . $this->getDefEnemigo() . "\n";
    }
}