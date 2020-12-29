<?php 
    // Array
    $edades[0] = 12;
    $edades[1] = 15;
    $edades[2] = 22;
    $i = 0;
    $e = 0;  

    // Do While
    do {
        // While
        while ($i < 3){
            // For
            for ($n=0; $n <= 2; $n++){
            // If
                if ($edades[$n] >= 18){
                    echo "Eres Mayor de Edad <br>";
                    echo "Edad: ", $edades[$n], "<br>";
                    echo "<br>";
                }
                else if ($edades[$n] < 18 && $edades[$n] >= 15){
                    echo "Se te enviara un correo <br>";
                    echo "Edad: ", $edades[$n], "<br>";
                    echo "<br>";
                }
                else {
                    echo "No tienes la Edad minima <br>";
                    echo "Edad: ", $edades[$n], "<br>";
                    echo "<br>";
                }
            }
            $i++;
        }
        echo "------------------------------------------- <br>";
        $e++;
        $i = 0;
    }
    while ($e < 3);
?>