<?php 

    include("basedatos.php");
    
    $exito = false;
    if(!empty($_POST['nombre']) && !empty($_POST['edad'])){
        $conexion = conectar_bd();
        $nombre = $_POST['nombre'];
        $edad =$_POST['edad'];
        $query = "insert into empleado (nombre, edad) values ('$nombre', '$edad')";
        $conexion->query($query);
        
        $exito = true;
        $conexion->close();

        if($exito == true){
            header('Location: index.php');
        }
        else {
            header('Location: nuevoempleado.php');
        }
    }
    else {
        header('Location: nuevoempleado.php');
    }

    

?>