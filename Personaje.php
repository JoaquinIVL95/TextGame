<?php 

Class Personaje{

private $idJugador;
private $hpJugador;
private $atqJugador;
private $defJugador;


public function __construct($id, $hp , $atq , $def)
{
    $this->idJugador = $id;
    $this->hpJugador = $hp;
    $this->atqJugador = $atq;
    $this->defJugador = $def;
}
    


public function getIdJugador()
{
return $this->idJugador;
}
public function setIdJugador($idJugador)
{
$this->idJugador = $idJugador;

}


public function getHpJugador()
{
    return $this->hpJugador;
}
public function setHpJugador($hpJugador)
{
    $this->hpJugador = $hpJugador;
}


public function getAtqJugador()
{
    return $this->atqJugador;
}

public function setAtqJugador($atqJugador)
{
    $this->atqJugador = $atqJugador;
    
}


public function getDefJugador()
{
    return $this->defJugador;
}

public function setDefJugador($defJugador)
{
    $this->defJugador = $defJugador;
    
}





    public function __toString()
    {
        return "ID Jugador: ". $this->getIdJugador() . "\n" . 
                "Puntos de vida: " . $this->getHpJugador() . "\n" . 
                "Fuerza de ataque: " .$this->getAtqJugador() . "\n" . 
                "Defensa: " . $this->getDefJugador() . "\n" ;
    }
}
