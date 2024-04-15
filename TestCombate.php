<?php

include 'Personaje.php';
include 'Enemigo.php';
include 'Combate.php';

$objPersonaje = new Personaje (1, 100 , 20 , 5);

$objEnemigo1= new Enemigo (1 , 70 , 8 , 4);
$objEnemigo2= new Enemigo (2, 90 , 6 , 3);
$objEnemigos = [$objEnemigo1,$objEnemigo2];

// echo $objPersonaje . "\n\n";
// echo $objEnemigo1 . "\n\n";
// echo $objEnemigo2 . "\n\n";

$objCombate = new Combate($objPersonaje, $objEnemigos);


echo $objCombate;
// do {





// }while ($exit != true);


