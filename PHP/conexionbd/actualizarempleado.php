<?php 

    include("basedatos.php");
    
    $exito = false;
    if(!empty($_POST['nombre']) && !empty($_POST['edad']) && !empty($_POST['id'])){
        $conexion = conectar_bd();
        $nombre = $_POST['nombre'];
        $edad =$_POST['edad'];
        $id = $_POST['id'];
        $query = "update empleado set nombre='". $nombre. "', edad='". $edad. "' where id='". $id. "'";
        $conexion->query($query);
        
        $exito = true;
        $conexion->close();

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