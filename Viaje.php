<?php 

/** Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los pasajeros e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros ( solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero. */


class Viaje {
        private $codigo;
        private $destino;
        private $cantMax;
        private $objPasajeros; //coleccion de obj
        private $objResponsableV ; // objeto

        private $costo;
        private $sumaCostos;

        public function __construct($c,$d,$cantMax, $responsable, $pasajero,$costo,$sumaCosto)   {
            $this->codigo = $c;
            $this->destino = $d;
            $this->cantMax = $cantMax;  
            $this->objResponsableV = $responsable;
            $this->objPasajeros = $pasajero;
            //
            $this->costo = $costo;
            $this->sumaCostos = $sumaCosto;
        }
        //GETTERS
        public function getCodigo (){
            return $this->codigo;
        }
        public function getDestino (){
            return $this->destino;
        }
        public function getCantMax (){
            return $this->cantMax;
        }
        public function getObjPasajeros (){
            return $this->objPasajeros;
        }
        public function getObjResponsableV (){
            return $this->objResponsableV;
        }
        //SETTERS
        public function setCodigo($c){
            $this->codigo = $c;
        }
        public function setDestino ($c){
            $this->destino = $c;
        }
        public function setCantMax ($c){
            $this->cantMax = $c;
        }
        public function setObjPasajeros ($c){
            $this->objPasajeros = $c;
        }
        public function setObjResponsableV($c){
            $this->objResponsableV = $c;
        }
        
        public function getCosto()
        {
                return $this->costo;
        }

        public function setCosto($costo)
        {
                $this->costo = $costo;

        }

   
        public function getSumaCostos()
        {
                return $this->sumaCostos;
        }

        public function setSumaCostos($sumaCostos)
        {
                $this->sumaCostos = $sumaCostos;
        }

        // esta function accede al arreglo donde estan los viajeros
        // luego recorre todos los elementos (objetos)
        // $arrayPasajeros le asigno el objeto con el metodo de acceso 
        public function verPasajeros (){
            
            if ($this->getObjPasajeros()!= null) {
    
                $arrayPasajeros = $this->getObjPasajeros();
                $Persona = "";
    
                foreach($arrayPasajeros as $pasajero){
                    
                    $Persona .= $pasajero . "\n";
                    $Persona .= "---------------\n";
                    
                }  
            }
            return $Persona;
        }
    
        public function __toString() {
            $cadena = "Codigo de viaje: ". $this->getCodigo() . "\n Destino: ". $this->getDestino(). "\n Capacidad maxima de pasajeros: ". $this->getCantMax(). "\n"."--------------------------------------------------\n" .$this->getObjResponsableV(). "\n";
           $cadena .= $this->verPasajeros();  
            return $cadena;
        }
    
        public function buscaPasajero ($dniBuscado){ 
    
            $arregloPasajeros = $this->getObjPasajeros();
            $encontrado = false;
            $n = count($arregloPasajeros);
            $i = 0;
            while ($i<$n && !$encontrado){
                if ($arregloPasajeros[$i]->getNumTicket() === $dniBuscado){
                    $encontrado = true; 
                 }
                $i++;
            }
            return $encontrado;
        }
    
        public function mostrarViaje(){
            return 
           "Su destino es: ".$this->getDestino(). "\n ".
           "Codigo: ".$this->getCodigo(). " \n ".
           "Cantidad maxima de pasajeros: ". $this->getCantMax() ."\n";
        }
       
        
        public function agregarPasajero($nuevoPasajero){
            $agregado = false;
            $cantPasajeros = count($this->getObjPasajeros());
            $cantMaxima = $this->getCantMax();
            if ($cantPasajeros < $cantMaxima){
                $pasajeros = $this->getObjPasajeros();
                array_push($pasajeros, $nuevoPasajero);
                $this->setObjPasajeros($pasajeros);
                $agregado = true;
            }
            return $agregado;
        }

        /** venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros ( solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero. */
       public function venderPasaje($objPasajero){

            $porcentaje = $objPasajero->darPorcentajeIncremento();
            $costo = $this->getCosto();
            
            $incorporo = $this->agregarPasajero($objPasajero);
            $precioFinal = 0;
           
            if($incorporo){
                $incremento = $costo * ($porcentaje / 100);
                $precioFinal = $costo + $incremento;
                $sumaCosto = $this->getsumaCostos();
               $sumaCosto += $precioFinal;
               $this->setSumaCostos($sumaCosto);
            }elseif (!$incorporo){
                $precioFinal = -1;
            }
            return $precioFinal;
       }
       /**Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros del viaje es menor a la cantidad máxima de pasajeros y falso caso contrario */
       public function hayPasajesDisponibles(){

       }
    }