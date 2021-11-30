<?php
   include_once "conexion.php";

   $cod_libro = $_POST['id_libro'];
   $sqlRemLibro= "DELETE FROM libro WHERE cod_libro=".$cod_libro;
   $conexion->query($sqlRemLibro);
    header('Location:../');
