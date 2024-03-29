<?php
// index.php - Punto de entrada de la aplicación

// Obtén la página desde la URL, por defecto será 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Dependiendo de la página, requerimos diferentes controladores
switch ($page) {
    case 'home':
        require 'controller/home.php';
        break;
    case 'login':
        require 'controller/formLogin.php';
        break;
    default:
        require 'controller/error.php'; // Controlador para página de error
}
