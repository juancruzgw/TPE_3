<?php 
/** Si el pasajero tiene necesidades especiales y requiere silla de ruedas, asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados entonces el incremento es del 15% */
class PasajeroEspecial extends Pasajero{
    private $requiereServicio; //entero 1,2,3

    public function __construct($n, $num,$numTicket,$servicio){
        parent::__construct($n, $num,$numTicket);
        $this->requiereServicio = $servicio;
    }
    

    public function getRequiereServicio()
    {
        return $this->requiereServicio;
    }

    
    public function setRequiereServicio($requiereServicio)
    {
        $this->requiereServicio = $requiereServicio;

    }
    public function __toString()
    {
        $txt = parent::__toString(). "\n";
        $txt .= "Requiere ".$this->getRequiereServicio(). " servicio(s)". "\n";
        return $txt;
    }
    /** Si el pasajero tiene necesidades especiales y requiere silla de ruedas, asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados entonces el incremento es del 15%. Por último, para los pasajeros comunes el porcentaje de incremento es del 10 % */
    public function darPorcentajeIncremento()
    {
        $porcentajeIncremento = 30;
        if ($this->getRequiereServicio() === 1){
            $porcentajeIncremento = 15;
        }
        return $porcentajeIncremento;
    }

}