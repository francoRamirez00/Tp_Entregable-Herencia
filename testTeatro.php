<?php


// ---------------- clases
include 'musical.php';
// include 'funcion.php';
include 'cine.php';
include 'obraTeatro.php';
include 'teatro.php';
// ---------------- clases fin- 

//----------------------------------datos cargados
$funcion_cine= new cine("rey leon",20,1,150,"infantil","USA");
$funcion_musical= new musical("sueño",22,1,150,"jorge",200);
$funcion_obra= new obraTeatro("cisne negro",18,2,200);

$colFunc= [$funcion_cine,$funcion_musical,$funcion_obra];

$teatro= new teatro("SAN MARTIN","AV ARG 123",$colFunc);
//----------------------------------datos cargados fin -


//----------------------------------prueba de funciones
echo "precio total con las funciones cargadas " .$teatro->darCostoTeatro();
echo "precio por tipo de funcion \n cine: " ;

echo $teatro->mostrarFunciones();

//----------------------------------prueba de funciones fin-
?>