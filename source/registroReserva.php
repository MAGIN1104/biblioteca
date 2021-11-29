<?php
 include_once "conexion.php";
    if($conexion->connect_errno){
           die('Se cayo los servicios');
    }else{
        $sql="INSERT INTO prestamo(f_prestamo, f_devolucion, id_estudiante, id_libro) values ('"
                .$_POST['f_prestamo']."','"
                .$_POST['f_devolucion']."','"
                .$_POST['id_estudiante']."',"
                .$_POST['id_libro']
                .");";
        $conexion->query($sql);
        header('Location:../');
    }
