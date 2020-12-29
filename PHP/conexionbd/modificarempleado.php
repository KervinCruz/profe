<?php 

    include('basedatos.php');
    $conexion = conectar_bd();

    $query = "Select id, nombre, edad from empleado where id=". $_GET['id']. " LIMIT 1";
    $conexion->query($query);
    $resul = $conexion->query($query);
    $conexion->close();



    $registro = mysqli_fetch_assoc($resul);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Empleado</title>
</head>
<body>
    <h1>Modificar Empleados</h1><br>
    <form action="actualizarempleado.php" method="post" name="nuevoempleado">
    
        <input type="text" name="nombre" value="<?php echo $registro['nombre']?>"><br>
        <input type="number" name="edad" value="<?php echo $registro['edad']?>"><br>
        <input type="hidden" name="id" value="<?php echo $registro['id']?>"><br>
        <input type="submit" name="Actualizar Empleado">
    
    </form>
</body>
</html>