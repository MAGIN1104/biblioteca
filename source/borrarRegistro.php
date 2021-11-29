<?php
   include_once "conexion.php";
   if($conexion->connect_errno){
        die('Ups...! Problemas con el servidor...!'); 
  }else{
   
   $id_prestamo = $_POST['id_prestamo'];
   $sqlDel= "DELETE FROM prestamo WHERE id_prestamo=".$id_prestamo;
   $conexion->query($sqlDel);
    header('Location:../');
  }
