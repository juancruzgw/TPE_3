<?php
/** "PasajeroVIP" tiene como atributos adicionales el número de viajero frecuente y cantidad de millas de pasajero. */

class PasajeroVip extends Pasajero {
private $nroViajeroFrecuente;
private $cantMillas;
public function __construct($n, $num,$numTicket,$nroViajero,$cantMillas)
{
    parent::__construct($n, $num,$numTicket);
    $this->nroViajeroFrecuente = $nroViajero;
    $this->cantMillas = $cantMillas;
}


public function getNroViajeroFrecuente()
{
return $this->nroViajeroFrecuente;
}


public function setNroViajeroFrecuente($nroViajeroFrecuente)
{
$this->nroViajeroFrecuente = $nroViajeroFrecuente;


}


public function getCantMillas()
{
return $this->cantMillas;
}

public function setCantMillas($cantMillas)
{
$this->cantMillas = $cantMillas;


}
public function __toString()
{
    $txt = parent::__toString();
        $txt .= "Nro de viajero Frecuente: ".$this->getNroViajeroFrecuente() . "\n";
        $txt .= "Cantidad de Millas: ".$this->getCantMillas() . "\n";
        return $txt;
}
/**Para un pasajero VIP se incrementa el importe un 35% y si la cantidad de millas acumuladas supera a las 300 millas se realiza un incremento del 30% */
    public function darPorcentajeIncremento(){

        $porcentajeIncremento = 35;
        if ($this->getCantMillas()> 300){
            $porcentajeIncremento = 30;
        }
        return $porcentajeIncremento;
}
}