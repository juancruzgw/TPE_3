<?php
include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'PasajeroEspecial.php';
include_once 'PasajeroVip.php';

$pasajero = new Pasajero ("Juan", 5,1);
$pasajero1 = new Pasajero ("Jack",4,2);

/*echo $pasajero . "\n";
echo $pasajero1 . "\n"; Bien 😎
echo $pasajero->darPorcentajeIncremento(). "\n"; retorna 10
echo $pasajero1->darPorcentajeIncremento(). "\n"; retorna 10
*/

$pasajero2 = new PasajeroEspecial ("Carlos", 20,3,3); // ultimo paramentro; cant de servicios que necesita
$pasajero3 = new PasajeroEspecial ("Maria", 15,4,1);

/*echo $pasajero2 . "\n";
echo $pasajero3 . "\n"; Bien 😎
echo $pasajero2->darPorcentajeIncremento(). "\n"; retorna 30
echo $pasajero3->darPorcentajeIncremento(). "\n"; retorna 15*/

$pasajero4 = new PasajeroVip ("Mauro", 10,5,1,400); // $nroViajero,$cantMillas (ultimos 2 param)
$pasajero5 = new PasajeroVip ("Gigachad", 3,6,2,100);
/*
echo $pasajero4 . "\n";
echo $pasajero5 . "\n"; Bien 😎
echo $pasajero4->darPorcentajeIncremento(). "\n"; retorna 30
echo $pasajero5->darPorcentajeIncremento(). "\n"; retorna 35
*/

$arrayPasajeros = [$pasajero,$pasajero1,$pasajero2,$pasajero3,$pasajero4,$pasajero5];

$objetoViaje = new Viaje (1,"Narnia",10, $responsable=null, $arrayPasajeros,1000,0);

$pasajero6 = new PasajeroVip ("Goku", 11,7,3,250);

$precio = $objetoViaje->venderPasaje($pasajero6);

//echo $precio; // en $1350 le queda el pasaje a Goku (🤑)

echo $objetoViaje;

// falta metodo hayPasajesDisponible() ._. 