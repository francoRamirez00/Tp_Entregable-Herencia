<?php

class Teatro{

    private $nombreTeatro ;
    private $direccionTeatro ;
    private $Funciones_Teatro ;

    public function __construct($nombreTeatro,$direccionTeatro,$Funciones_Teatro){

        $this->nombreTeatro =$nombreTeatro ;
        $this->direccionTeatro =$direccionTeatro;
        $this->Funciones_Teatro = $Funciones_Teatro ;
     

       
            
    }

    public function getNombreTeatro(){

        return $this->nombreTeatro ;
    }
    public function getDireccionTeatro(){

        return $this->direccionTeatro ;
    }
    public function getFunciones_teatro()
    {
        return $this->Funciones_Teatro ;
    }
    public function setNombreTeatro($nombreTeatro){

        return $this->nombreTeatro =$nombreTeatro;
    }
    public function setDireccionTeatro($direccionTeatro){

        return $this->direccionTeatro =$direccionTeatro ;
    }
    public function setFunciones_teatro($Funciones_Teatro)
    {
        return $this->Funciones_Teatro = $Funciones_Teatro ;
    }


    // calcula el costo del alquiler del teatro con las funciones ya cargadas
    public function darCostoTeatro(){

        $coleccion= $this->getFunciones_teatro();
        $costoFinal = 0 ;
        foreach($coleccion as $tipoFuncion){

            $costo= $tipoFuncion->darCosto();
            $costoFinal += $costo;
        }

        return $costoFinal;
    }

    public function cargarFunciones($objFuncion){

        $coleccionFunciones= $this->getFunciones_teatro();
        $i=0;
        $existe= null;
        

        while ($i < count($coleccionFunciones) && is_null($existe)  ) {

            $nombreNuevo_Funcion= $objFuncion->getNombre();
            $existeHorario = $this->chequeoHorario($objFuncion-> getHora_inicio(),$objFuncion->getDuracionObra());

          if ( $nombreNuevo_Funcion !== $coleccionFunciones[$i]->getNombre() && $existeHorario) {
                
                array_push($colFunciones,$objFuncion);
                $this->setFunciones_teatro($colFunciones);   
                $existe= false;
          }

          $i++;
          $existe = null;

        }

        return $existe;
    }

   

    public function chequeoHorario($nuevahora, $nuevaDuracion){

        $terminaNuevo_horario = $nuevahora + $nuevaDuracion ;
        $i = 0 ;
        $retorno = false ;
        $Funcion = $this->getFunciones_teatro();
        do {
            

               //$horarioFuncion funcion que contiene el horario de finalizacion de las funciones
                $horarioFuncion =  $Funcion[$i]->getHora_inicio() +$Funcion[$i]->getDuracionObra();
                if (  $nuevahora < $Funcion[$i]->getHora_inicio() ||($terminaNuevo_horario < $horarioFuncion)  ) {
            
                    $retorno = true ;
                } else {
                   
                    $i++;
                }
           
        } while ($retorno == false && $i<count( $Funcion)) ;
       
        return $retorno ;
        

    }

    // funcion para cambiar el nombre al teatro
    public function cambiar_nom_teatro($nuevoNombre_Teatro){

        if ($nuevoNombre_Teatro !== $this-> getNombreTeatro() ) {
           
            $valido = true ;
            $this->setNombreTeatro($nuevoNombre_Teatro);
        }else {
            $valido = false ;
        }

        return $valido ;
    }

    // funcion para cambiar la direccion del teatro
    public function cambiar_nom_Direccion($nuevoNombre_Direccion){

        if ($nuevoNombre_Direccion !== $this-> getDireccionTeatro() ) {
           
            $valido = true ;
            $this->setDireccionTeatro($nuevoNombre_Direccion);
        }else {
            $valido = false ;
        }

        return $valido ;
    }

    // funcion para cambiar el nombre de la funcion
    public function cambiar_nom_Funcion($posicion,$nuevoNombre_funcion){
        
        $colFunciones=$this->getFunciones_teatro();
        if ($posicion >= 0 && $posicion <count($colFunciones)) {
            $existe = true ;
            $colFunciones[$posicion]->setNombre($nuevoNombre_funcion);
           
          
        }else {
            
           
            $existe = false ;
        }
        return $existe ;
               
    }

    


            // funcion para cambiar el precio de una funcion
       
    public function cambiar_precio_funcion($posicion, $precio){

        $colFunciones=$this->getFunciones_teatro();
        if ($posicion >= 0 && $posicion <count($colFunciones)) {
            $existe = true ;
            $colFunciones[$posicion]->setPrecio($precio);
           
          
        }else {
            
           
            $existe = false ;
        }
  

    

     return $existe ;
    
    }

    public function mostrarFunciones(){

        foreach($this->getFunciones_teatro()as $funcion){

            echo "\n ".$funcion ."\n-------------";
        }
    }
    

    public function __toString()
    {
             
        
         $final ="nombre teatro : ". $this->getNombreTeatro()."\n". "direccion : ". $this->getDireccionTeatro()."\n". "-----funcion actuales ---- \n ".$this->mostrarFunciones();
        return $final; 

    
    }
}





// include 'funciones_Teatro.php' ; 
// $funciones = new funciones_Teatro("el leon", 21,1,150) ;

// $datos =new Teatro("san","calle", $funciones) ;

// MENU DEL TEATRO 
// echo "bienvenido al Teatro ". $datos->getNombreTeatro(). "\n" ;
// echo $datos->__construct("san","calle",$funciones);


// do {
//     echo "Por favor elija una opcion-------\n";
//     echo "      \n-1)ver informacion del teatro y las funciones actuales " ;
//     echo "      \n-2)cargar funcion nueva" ;
//     echo "      \n-3)cambiar nombre del teatro ";
//     echo "      \n-4)cambiar la direccion del teatro";
//     echo "      \n-5)cambiar nombre de una funcion";
//     echo "      \n-6)cambiar precio de una funcion";
//     echo "      \n-7) salir del menu " ;
//     $eleccion = trim(fgets(STDIN)) ;

//     switch ($eleccion) {

//         case '1':
               
//                 echo $datos  ;
//                 echo $datos->mostrarFunciones() . "\n";
//             break;
    
//         case '2':
//                 echo "cargar nueva funcion... \n nombre :" ;
//                 $newNombre = trim(fgets(STDIN)) ;

//                 echo "posicion :" ;
//                 $newPosicion = trim(fgets(STDIN)) ;

//                 echo "hora de inic:" ;
//                 $newHoraInicio = trim(fgets(STDIN)) ;

//                 echo "duracion :" ;
//                 $newDuracion = trim(fgets(STDIN)) ;

//                 echo "precio :" ;
//                 $newPrecio = trim(fgets(STDIN)) ;

//                $newFuncion = new funciones_Teatro($newNombre,$newHoraInicio,$newDuracion,$newPrecio) ;
//                     $datos->cargarFunciones($newPosicion,$newFuncion) ;
//                    /* $datos =new Teatro("san","calle", $newFuncion) ;*/
//                     echo $datos;
//                 if ($datos->cargarFunciones($newPosicion,$newFuncion) == true) {

//                     echo "funcion nueva cargada exitosamente " ;
                    
                    
//                 }else {
//                     echo "fallo" ;
//                 }

               

//             break;

//         case '3':

//                 echo "ingrese nuevo nombre de teatro : "  ;
//                 $nuevoNombre_Teatro = trim(fgets(STDIN)) ;
//                 echo "Cargando nombre del teatro .   .   .  . ". "\n" ;
//                 $validez = $datos->cambiar_nom_teatro($nuevoNombre_Teatro) ;
//                     if ($validez == true) {
//                          echo "El nombre del teatro fue cambiado exitosamente". "\n" ;
//                     }else {
//                          echo "el nombre que se ingreso ya existia ". "\n" ;
//                     }   
//                          echo "saliendo al menu . . .". "\n" ;

//             break;
    
//         case '4':

//                 echo "ingrese nueva direccion : " ;
//                 $nuevoNombre_Direccion = trim(fgets(STDIN)) ;
//                  echo "Cargando direccion del teatro .   .   .  . ". "\n" ;
//                 $validez = $datos->cambiar_nom_Direccion($nuevoNombre_Direccion);
//                 if ($validez == true) {
//                         echo "La direccion del teatro fue cambiada exitosamente". "\n" ;
    
//                 }else {
//                         echo "el nombre ingresado ya se encuentra" ."\n" ;
//                         echo "saliendo al menu . . .". "\n" ;
//                 }
       
//             break ;

//         case '5':

//             echo "ingrese nombre de la nueva funcion: " ;
//             $nombreNuevo_Funcion = trim(fgets(STDIN)) ;
//             echo "ingrese que numero de la funcion desea cambiar (0 - 3): " ;
//             $posicion = trim(fgets(STDIN));
//             echo "cargando nombre a la nueva funcion . . . .". "\n" ;
//             $validez = $datos->cambiar_nom_Funcion($posicion,$nombreNuevo_Funcion) ;

//                 if ($validez) {
//                         echo "El nombre de la funcion ". $posicion. " fue actualizado correctamente" ."\n";
//                 }else {
//                         echo "El numero de la posicion ingresado es incorrecto " . "\n";
// }
//                         echo "saliendo al menu . . ." . "\n";

//         break;
            
//         case '6':

//             echo "ingrese el numero de la funcion desea cambiar el precio (0 - 3): " ;
//             $posicion = trim(fgets(STDIN));
//             echo "ingrese el precio que desea cargar: ". "\n" ;
//             $precioNuevo = trim(fgets(STDIN)) ;
//             echo "cargando precio en la posicion " . $posicion. "\n" ;
//             $validez = $datos->cambiar_precio_Funcion($posicion,$precioNuevo) ;

//                 if ($validez) {
//                     echo "El precio fue actualizado exitosamente ". "\n" ;
//                 }else {
//                     echo "numero de la posicion ingresado incorrecto" ;
// }           
//                     echo "saliendo al menu . . ." . "\n";
    
//         break;
            
    
//     }
// } while ($eleccion < 7); 
    
    














 

 


  