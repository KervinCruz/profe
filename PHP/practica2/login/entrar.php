<?php
    include ('../conexion.php');
    
    $exito = false;
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $radio = $_POST['tuser'];

    
    if (!empty($user) && !empty($pwd)){
        // Conexion
        $conexion = conectarbd();
        
        // Login Administrador - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        if ($radio == 'administrador'){
            // Consulta
            $query = "select usuario,pwd from administradores WHERE usuario = '". $user. "' LIMIT 1;";
            // Ejecutando Consulta
            $result = $conexion->query($query);
            // Guardando el Registro
            $registro = $result->fetch_assoc();
            // Cerrando Conexión
            $conexion->close();
            
            // Verificando si el usuario está registrado
            if ($user == $registro['usuario']){
                // Verificando si la clave es la correcta
                if($pwd == $registro['pwd']){
                    echo "<h2>Bien</h2>";
                }
                // Contraseña incorrecta
                else {
                    echo "<h3>Contraseña Incorrecta</h3><a href='login.php'>Volver</a>";
                }
            }
            // Usuario no Registrado
            else {
                echo "<h3>Usuario no Registrado</h3><br><a href='login.php'>Volver</a>";
            }

            
        }

        // Login Profesor - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        else if ($radio == 'profesor'){
            // Consulta
            $query = "select usuario,pwd from profesores WHERE usuario = '". $user."';";
            // Ejecutando Consulta
            $result = $conexion->query($query);
            // Guardando el Registro
            $registro = $result->fetch_assoc();
            // Cerrando Conexión
            $conexion->close();
            
            // Verificando si el usuario está registrado
            if ($user == $registro['usuario']){
                // Verificando si la clave es la correcta
                if($pwd == $registro['pwd']){
                    echo "<h2>Bien</h2>";
                }
                // Contraseña incorrecta
                else {
                    echo "<h3>Contraseña Incorrecta</h3><br><a href='login.php'>Volver</a>";
                }
            }
            // Usuario no Registrado
            else {
                echo "<h3>Usuario no Registrado</h3><br><a href='login.php'>Volver</a>";
            }


            
        }

        // Login Estudiante - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        else if ($radio == 'estudiante'){
            // Consulta
            $query = "select usuario,pwd from alumnos WHERE usuario = '". $user."';";
            // Ejecutando Consulta
            $result = $conexion->query($query);
            // Guardando el Registro
            $registro = $result->fetch_assoc();
            // Cerrando Conexión
            $conexion->close();
            
            // Verificando si el usuario está registrado
            if ($user == $registro['usuario']){
                // Verificando si la clave es la correcta
                if($pwd == $registro['pwd']){
                    echo "<h2>Bien</h2>";
                }
                // Contraseña incorrecta
                else {
                    echo "<h3>Contraseña Incorrecta</h3><br><a href='login.php'>Volver</a>";
                }
            }
            // Usuario no Registrado
            else {
                echo "<h3>Usuario no Registrado</h3><br><a href='login.php'>Volver</a>";
            }
        }

        else {
            header('Location: login.php');
        }

    }// Ninguna Opcion - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    else {
        header("Location: login.php");
    }

?>