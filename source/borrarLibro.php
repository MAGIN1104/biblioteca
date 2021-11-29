<?php
   include_once "conexion.php";
   if($conexion->connect_errno){
        die('Ups...! Problemas con el servidor...!'); 
  }else{
   
   $cod_libro = $_POST['id_libro'];
   $sqlRemLibro= "DELETE FROM libro WHERE cod_libro=".$cod_libro;
   $conexion->query($sqlRemLibro);
    header('Location:../');
  }
