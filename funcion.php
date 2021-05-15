<?php

class funciones_Teatro{

    private $nombre ;
    private $hora_inicio ;
    private $duracionObra ;
    private $precio ;
    

    public function __construct($nombre, $hora_inicio, $duracionObra,$precio)
    {
        $this-> nombre = $nombre ;
        $this-> hora_inicio= $hora_inicio ;
        $this-> duracionObra =$duracionObra ;
        $this-> precio = $precio ;
       


        
    }
        
    public function getNombre(){

        return $this->nombre ;
    }
    public function getHora_inicio(){

        return $this->hora_inicio ;
    }
    public function getDuracionObra(){

        return $this->duracionObra ;
    }
    public function getPrecio(){

        return $this->precio ;
    }
  


    public function setNombre($nombre){

        return $this->nombre=$nombre ;
    }
    public function setHora_inicio($hora_inicio){

        return$this-> hora_inicio = $hora_inicio ;
    }
    public function setDuracionObra($duracionObra){

        return$this->duracionObra = $duracionObra ;
    }
    public function setPrecio($precio){

        return$this->precio = $precio ;
    }
    

    


    public function __toString()
    {
        return "nombre : " . $this->getNombre(). "\n". "hora de inicio : ". $this->getHora_inicio(). "hs \n". "duracion : ". $this->getDuracionObra(). "hs \n". "precio : ". $this->getPrecio() ;
            
    }


    public function darCostos_funciones(){

        $costo= $this->getPrecio();

        return $costo;
    }


}