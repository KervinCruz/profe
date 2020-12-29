<?php 
    include("basedatos.php");
    
    $exito = false;
    if(!empty($_GET['id'])){
        $conexion = conectar_bd();
        $id = $_GET['id'];
        $query = "Delete from empleado where id='". $id. "'";
        $conexion->query($query);
        $resul = $conexion->query($query);
        $conexion->close();

        $exito = true;

        if($exito == true){
            header('Location: index.php');
        }
        else {
            header('Location: index.php');
        }
    }
    else {
        header('Location: index.php');
    }
?>
