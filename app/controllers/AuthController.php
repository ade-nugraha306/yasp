<?php

require_once __DIR__ . '/../../core/Database.php';

class AuthController {

    public function showLogin()
    {
        require __DIR__ . '/../views/home/login.php';
    }

    public function showRegister()
    {
        require __DIR__ . '/../views/home/register.php';
    }

    public function register()
    {
        $db = Database::getInstance();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $stmt = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $password]);

        header("Location: /login");
    }

    public function login()
    {
        $db = Database::getInstance();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user;

            header("Location: /");
        } else {
            echo "Login gagal";
        }
    }
}