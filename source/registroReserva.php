<?php
 include_once "conexion.php";
    $r_prestamo=$_POST['prestamo'];
    $r_devolucion=$_POST['devolucion'];
    $r_estudiante=$_POST['estudiante'];
    $r_libro=$_POST['libro'];
    
    $sql="INSERT INTO prestamo (f_prestamo, f_devolucion, id_estudiante, id_libro) VALUES ('$r_prestamo','$r_devolucion','$r_estudiante',$r_libro)";
    $conexion -> query($sql);
    header('Location:../');

