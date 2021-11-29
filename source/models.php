<?php
   include_once "conexion.php";
   if($conexion->connect_errno){
        die('Ups...! Problemas con el servidor...!'); 
  }else{
        
   $sql="SELECT * FROM libro";
   $sqldata="SELECT *FROM prestamo";
   $resultado = $conexion -> query($sql);
   $resultados=$conexion->query($sqldata);
   


   //COMPROBAR SI DEVOLVIO RESULTADOS
   // if($resultado->num_rows){
   //      // echo $resultado->fetch_assoc();
   //      while($fila = $resultado->fetch_assoc()){
   //          echo $fila['cod_libro'] . ' ' . $fila['titulo']. ' ' . $fila['autor'] . '<br />';
   //      }
   // }else{
   //     echo 'No hay datos';
   // }
    
  }
