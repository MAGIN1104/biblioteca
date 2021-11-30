<?php
 include_once "conexion.php";
    $sql="INSERT INTO estudiante(codigo, nombre, apellidos, email, cel) values ('".
    strtoupper($_POST['codigo'])."','".
    strtoupper($_POST['nombre'])."','".
    strtoupper($_POST['apellidos'])."','".
    $_POST['email']."',".
    $_POST['cel'].");";
    $conexion->query($sql);
    header('Location:../');
