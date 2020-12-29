<?php 

    include("basedatos.php");
    $conexion = conectar_bd();
    $query = "Select id, nombre, edad  from empleado";

    $conexion->query($query);
    $result = $conexion->query($query);
    $conexion->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <ul>
        <?php 
            while($mostrar = mysqli_fetch_array($result)){
                echo "<li>". $mostrar['nombre']. " (". $mostrar['edad']. "años ID: ". $mostrar['id'].")";
                echo "<a href='modificarempleado.php?id=". $mostrar['id']. "'>Modificar</a>";
                echo "<a href='eliminarempleado.php?id=". $mostrar['id']. "'>Eliminar</a></li>";
            }        
        ?>
    </ul>
    <br><a href="nuevoempleado.php">Nuevo Empleado</a>
</body>
</html>