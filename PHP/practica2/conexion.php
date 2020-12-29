<?php

    function conectarbd(){
        $servidor = 'localhost';
        $usuario = 'administrador';
        $password = 'admin123456';
        $bd = 'colegio';

        $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

        return $conexion;
    }

?>