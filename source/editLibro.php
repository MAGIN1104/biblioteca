<?php
   include_once "conexion.php";

    $sqllibro= "UPDATE libro SET categoria='".$_POST['cat'].
               "',titulo='". strtoupper($_POST['tit']).
               "',autor='".strtoupper($_POST['aut']).
               "',editorial='".strtoupper($_POST['edi']).
               "',anio_publicacion=".$_POST['ani'].
               " WHERE cod_libro=".$_POST['cod']; 
    $reslibro=$conexion->query($sqllibro);
    header('Location:../');
