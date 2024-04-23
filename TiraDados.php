<?php


Class TiraDados{

    private $opcionDado;

    public function __construct($opcion)
    {   
        $this->opcionDado = $opcion;
    }


    public function getOpcionDado()
    {
        return $this->opcionDado;
    }
    public function setOpcionDado($nuevaOpcion)
    {
        $this->opcionDado = $nuevaOpcion;
    }


    public function tirarDado($dadoSel){
        ;
        $resultado = 0 ; 

        if($dadoSel == 1){
            $resultado = rand(1,20);
        }

        return $resultado;
    }

}