<?php 

    $num1 = $_GET['valor1'];
    $num2 = $_GET['valor2'];
    $select = $_GET['select'];


    if ($select == 'sumar'){
        $resul = sumando($num1,$num2);
        echo "<h3>El resultado es: ", $resul, "</h3><br>";
        echo "<a href='index.php'>Volver</a><br>";
    }
    else if ($select == 'restar'){
        $resul = restando($num1,$num2);
        echo "<h3>El resultado es: ", $resul, "</h3><br>";
        echo "<a href='index.php'>Volver</a><br>";
    }
    else if ($select == 'mult'){
        $resul = multiplicando($num1,$num2);
        echo "<h3>El resultado es: ", $resul, "</h3><br>";
        echo "<a href='index.php'>Volver</a><br>";
    }
    else if ($select == 'div'){
        $resul = dividiendo($num1,$num2);
        echo "<h3>El resultado es: ", $resul, "</h3><br>";
        echo "<a href='index.php'>Volver</a><br>";
    }
    else {
        echo "<h3>No selecciono una opcion</h3><br>";
        echo "<a href='index.php'>Volver</a><br>";
    }


    function sumando($n1,$n2){
        return $n1 + $n2;
    }

    function restando($n1,$n2){
        return $n1 - $n2;
    }

    function multiplicando($n1,$n2){
        return $n1 * $n2;
    }

    function dividiendo($n1,$n2){
        return $n1 / $n2;
    }
?>