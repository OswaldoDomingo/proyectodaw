<?php
// controller/controlFormLogin.php
require 'model/Login.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /*
    El operador ?? es el operador de fusión de null en PHP. Este operador devuelve su primer operando si existe y no es NULL; 
    de lo contrario, devuelve su segundo operando. En este caso, si $_POST['username'] o $_POST['password'] existen y no son NULL, 
    sus valores se asignarán a las variables $username y $password respectivamente. 
    Si no existen o son NULL, se asignará una cadena vacía ('') a las variables.
    Esto es útil para evitar errores cuando se intenta acceder a índices que no existen en un array, 
    lo cual ocurriría si se intenta acceder a $_POST['username'] o $_POST['password'] cuando no se han enviado datos a través del método POST.
    */
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $loginModel = new Login();
    if ($loginModel->comprobarCredenciales($username, $password)) {
        // Usuario autenticado, redirigir a la página privada
        header("Location: index.php?page=home");
        exit();
    } else {
        // Autenticación fallida, mostrar error
        $error = "Usuario o contraseña incorrectos.";
    }
}

require 'view/formLogin.php';

?>