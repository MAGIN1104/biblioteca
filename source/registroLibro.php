<?php
 include_once "conexion.php";

    $sql="INSERT INTO libro(cod_libro, categoria, titulo, autor, editorial, anio_publicacion) values (".
    $_POST['cod_libro'].",'".
    strtoupper ($_POST['categoria'])."','".
    strtoupper ($_POST['titulo'])."','".
    strtoupper ($_POST['autor'])."','".
    strtoupper ($_POST['editorial'])."',".
    $_POST['anio_publicacion'].");";
    $conexion->query($sql);
    header('Location:../');
