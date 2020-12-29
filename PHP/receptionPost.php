<?php 

    $usuario = $_POST['user'];
    $password = $_POST['pwd'];

    $inicio = verificar($usuario,$password);

    if ($inicio == true){
        echo "Bienvenido ", $usuario, "<br>";
        echo "<a href = 'formulario.php'>Volver</a>";
    }
    else {
        echo "Datos Incorrectos <br>";
        echo "<a href = 'formulario.php'>Volver</a>";
    }



    function verificar($usuario,$pwd){
        if ($usuario == "Administrador" && $pwd == "admin123456"){
            return true;
        }
        else {
            return false;
        }
    }

?>