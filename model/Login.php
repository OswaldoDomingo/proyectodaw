<?php
// model/Login.php
require_once 'config/database.php';

class Login {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function checkCredentials($username, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute(['username' => $username, 'password' => $password]);
        return $stmt->fetch() !== false;
    }
}

?>