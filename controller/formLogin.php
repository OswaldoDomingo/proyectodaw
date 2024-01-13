<?php
// controller/controlFormLogin.php
require 'model/Login.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

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