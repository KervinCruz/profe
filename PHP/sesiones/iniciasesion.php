<?php 

    session_start();
    $_SESSION['Saludo'] = 'Hola';
    header("Location: imprimesesion.php");

?>