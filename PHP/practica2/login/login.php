<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio KC</title>
</head>
<body>
    <h1>Iniciar Sesion</h1>

    <form action="entrar.php" method="post" name="iniciar">
        <p>Usuario: <input type="text" name="user"></p>
        <p>Contraseña: <input type="password" name="pwd"></p>
        <p>Tipo de Usuario </p>
        <p><input type="radio" name="tuser" value="administrador">Administrador
        <input type="radio" name="tuser" value="profesor">Profesor
        <input type="radio" name="tuser" value="estudiante">Estudiante</p>
        <input type="submit" name="Enviar">
    </form>

</body>
</html>