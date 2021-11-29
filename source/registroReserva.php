<?php
 include_once "conexion.php";
    if($conexion->connect_errno){
           die('Se cayo los servicios');
    }else{
        $sqlRes="INSERT INTO prestamo(f_prestamo, f_devolucion, id_estudiante, id_libro) values ('"
                .$_POST['prestamo']."','"
                .$_POST['devolucion']."','"
                . strtoupper($_POST['estudiante'])."',"
                .$_POST['libro']
                .");";
        $conexion->query($sqlRes);
        header('Location:../');
    }
