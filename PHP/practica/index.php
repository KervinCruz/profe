<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora by KervinCruz</h1>
    <br>
    <form method="get" action="calcular.php">
        Valor 1: <input type="text" name = "valor1"><br>
        Valor 2: <input type="text" name = "valor2"><br>
        Seleccionar <br>
        <input type="radio" name="select" value="sumar">Sumar
        <input type="radio" name="select" value="restar">Restar
        <input type="radio" name="select" value="mult">Multiplicar
        <input type="radio" name="select" value="div">Dividir
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>