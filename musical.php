<?php 

include 'funcion.php';
class musical extends funciones_Teatro{

    private $director;
    private $cantidadPersonas;

    public function __construct($nombre, $hora_inicio, $duracionObra,$precio,$director,$cantidadPersonas)
    {
        parent:: __construct($nombre, $hora_inicio, $duracionObra,$precio,$director,$cantidadPersonas);

        $this->director=$director;
        $this->cantidadPersonas=$cantidadPersonas;
    }

    // metodos de acceso del atributo $director

    public function getdirector(){
        return $this->director;
    }

    public function setdirector($director){
        return $this->director=$director;
    }


    // metodos de acceso del atributo $cantidadPersonas

    public function getcantidadPersonas(){
        return $this->cantidadPersonas;
    }

    public function setcantidadPersonas($cantidadPersonas){
        return $this->cantidadPersonas=$cantidadPersonas;
    }


    public function __toString()
    {
        $stringPadre= parent::__toString();
        return $stringPadre. "\n director: ".$this->getdirector(). "\n cantidad de persona en la escena: ". $this->getcantidadPersonas();
    }



    public function darCosto(){

        $costo = parent::darCostos_funciones();

        $costoFinal= $costo +($costo *0.12 );

        return $costoFinal;
    }

}
?>