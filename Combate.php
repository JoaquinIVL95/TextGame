<?php

Class Combate{


    private $jugador;
    private $enemigo;

    public function __construct($jugador, $enemigo){
        $this->jugador = $jugador;
        $this->enemigo = $enemigo;
    }

    public function getJugador(){
        return $this->jugador;
    }

    public function setJugador($jugador){
        $this->jugador = $jugador;
    }

    
    
    public function getEnemigo()
    {
        return $this->enemigo;
    }
    public function setEnemigo($enemigo)
    {
        $this->enemigo = $enemigo;
    }

    public function mostrarArreglo($arreglo){
        $cadena = "";
        foreach ($arreglo as $elemento ){
            $cadena .= $elemento . "\n";
        }
        return $cadena;
    }

    public function __toString()
    {
        return "Jugador : "  . $this->getJugador(). "\n\n" .
               "Enemigo: "   . $this->mostrarArreglo($this->getEnemigo());
    }
}