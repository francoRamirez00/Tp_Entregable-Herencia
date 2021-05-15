<?php

// include 'funcion.php';
class obraTeatro extends funciones_Teatro{

    public function __construct($nombre, $hora_inicio, $duracionObra,$precio)
    {
        parent:: __construct($nombre, $hora_inicio, $duracionObra,$precio);
    }

   

    public function __toString()
    {
        $stringObra= parent::__toString();
        return $stringObra ."\n";
    }

    public function darCosto(){

        $costo = parent::darCostos_funciones();

        $costoFinal= $costo +($costo *0.45 );

        return $costoFinal;
    }
}
?>