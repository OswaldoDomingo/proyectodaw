<!DOCTYPE html>
<!-- view/viewFormLogin.php -->
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="index.php?page=login" method="post">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>

</html>