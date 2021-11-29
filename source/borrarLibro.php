<?php
   include_once "conexion.php";
   if($conexion->connect_errno){
        die('Ups...! Problemas con el servidor...!'); 
  }else{
   
   $id_prestamo = $_POST['id_libro'];
   $sqlDel= "DELETE FROM libro WHERE cod_libro=".$id_prestamo;
   $conexion->query($sqlDel);
    header('Location:../');
  }
