<?php
    function conectar_bd(){
        $servidor = 'localhost';
        $usuario = 'administrador';
        $password = 'admin123456';
        $nombrebd = 'empresa';
        
        $conexion = mysqli_connect($servidor, $usuario, $password, $nombrebd);
        

        return $conexion;
    }

?>