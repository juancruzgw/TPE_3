
<?php 
/** atributos el nombre, el número de asiento y el número de ticket del pasaje del viaje */

class Pasajero {
    private $nombre;
    private $numAsiento;
    private $numTicket;

    public function __construct($n, $num,$numTicket)
    {
        $this->nombre = $n;
        $this->numAsiento = $num;
        $this->numTicket = $numTicket;
    }
    

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    public function getNumAsiento()
    {
        return $this->numAsiento;
    }

 
    public function setNumAsiento($numAsiento)
    {
        $this->numAsiento = $numAsiento;


    }

    public function getNumTicket()
    {
        return $this->numTicket;
    }

    public function setNumTicket($numTicket)
    {
        $this->numTicket = $numTicket;

    }
    public function __toString()
    {
        $txt = "Nombre  ".$this->getNombre() . "\n";
        $txt .= "Nro Asiento: ".$this->getNumAsiento() . "\n";
        $txt .= "Nro Ticket: ".$this->getNumTicket() . "\n";
        return $txt;
    }
   public function darPorcentajeIncremento(){
        $porcentajeIncremento = 10;
        return $porcentajeIncremento;
   }
}