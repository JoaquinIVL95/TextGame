<?php

Class Enemigo{

    private $idEnemigo ;
    private $hpEnemigo ;
    private $atqEnemigo ;
    private $defEnemeigo ;

    public function __construct($id, $hp , $atq , $def)
    {
        $this->idEnemigo = $id;
        $this->hpEnemigo = $hp;
        $this->atqEnemigo = $atq;
        $this->defEnemeigo = $def;
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

    
    public function getDefEnemeigo()
    {
        return $this->defEnemeigo;
    }
    public function setDefEnemeigo($defEnemeigo)
    {
        $this->defEnemeigo = $defEnemeigo;
    }

    


    public function __toString()
    { 
        return "Datos Enemigo: \n" . 
        "Id: " . $this->getIdEnemigo() . "\n".
        "HP: " . $this->getHpEnemigo() . "\n".
        "AtQ: " . $this->getAtqEnemigo() .  "\n".
        "DEF: " . $this->getDefEnemeigo() . "\n";
    }
}