<?php

include 'Personaje.php';
include 'Enemigo.php';
include 'Combate.php';
include 'TiraDados.php';

$objPersonaje = new Personaje (1, 100 , 20 , 5);

$objEnemigo1= new Enemigo (1 , 70 , 8 , 4);
$objEnemigo2= new Enemigo (2, 90 , 6 , 3);
$objEnemigos = [$objEnemigo1,$objEnemigo2];
$opcionDado = 0; 
$objTirarDados = new TiraDados($opcionDado);


// echo $objPersonaje . "\n\n";
// echo $objEnemigo1 . "\n\n";
// echo $objEnemigo2 . "\n\n";

$objCombate = new Combate($objPersonaje, $objEnemigos);


// echo $objCombate;

$exit = false;
while($exit != true) { 
    

    echo "Eliga su accion: \n";
    echo "1. Atacar \n";
    echo "2. Salir\n";

    $opcion =trim(fgets(STDIN));

    switch ($opcion){
        case 1:
            $atacarA = 0;
            $combate = $objCombate->atacar($atacarA) ;

            if($combate > 0 ){
                if($objTirarDados->tirarDado(1)  <=12){
                    echo "daño realizado \n";
                    echo "Puntos de vida restante del oponente: \n" . $combate; 
                }else{
                    echo "Fallo el ataque \n";
                    echo "Puntos de vida restante: " . $combate->getEnemigo()."\n";
                }
                    

            }else{
                echo "Enemigo abatido";
                unset( $objEnemigos[0]);
                $atacarA += 1;
               
            }
            echo  "\n" ."\n";

            
            break;
        case 2: 
            $exit = true;
            break;
            
        default :
            echo "Opcion no valida"."\n";
            break;
    }
}
