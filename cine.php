<?php

// include 'funcion.php';
class cine extends funciones_Teatro{

    private $genero ;
    private $paisOrigen;

    // metodo constructor

    public function __construct($nombre, $hora_inicio, $duracionObra,$precio, $genero, $paisOrigen)
    {
        parent:: __construct($nombre, $hora_inicio, $duracionObra,$precio, $genero,$paisOrigen);
    
        $this->genero=$genero;
        $this->paisOrigen=$paisOrigen;
    }

    // metodos de acceso del atributo $genero

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        return $this->genero=$genero;
    }


    // metodos de acceso del atributo $paisOrigen

    public function getpaisOrigen(){
        return $this->paisOrigen;
    }

    public function setpaisOrigen($paisOrigen){
        return $this->paisOrigen=$paisOrigen;
    }


    public function __toString()
    {
        $stringPadre= parent::__toString();
        return $stringPadre. "\n genero: ".$this->getGenero(). "\n pais de origen: ".$this->getpaisOrigen();
    }



    public function darCosto(){

        $costo = parent::darCostos_funciones();

        $costoFinal= $costo +($costo *0.65 );

        return $costoFinal;
    }

}
?>