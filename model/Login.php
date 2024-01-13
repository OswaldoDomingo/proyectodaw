<?php
// model/Login.php
require_once 'config/database.php';

class Login {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

        public function comprobarCredenciales($username, $password): bool {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email AND pass = :password");
            $stmt->execute([
                'email' => $username,
                'password' => $password,
            ]);
            return $stmt->fetch() !== false;
        }
    }

?>