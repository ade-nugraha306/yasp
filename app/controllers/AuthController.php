<?php

require_once __DIR__ . '/../../core/Database.php';

class AuthController {

    public function showLogin()
    {
        require __DIR__ . '/../views/home/login.php';
    }

    public function showRegister()
    {
        $db = Database::getInstance();

        $prodi = $db->query("SELECT * FROM prodi")->fetchAll(PDO::FETCH_ASSOC);

        require __DIR__ . '/../views/home/register.php';
    }

    public function register()
    {
        $db = Database::getInstance();

        $stmt = $db->prepare("
            INSERT INTO mahasiswa 
            (nim, nama, tgl_lahir, alamat, agama, kelamin, no_hp, email, id_prodi, password)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $stmt->execute([
            $_POST['nim'],
            $_POST['nama'],
            $_POST['tgl_lahir'],
            $_POST['alamat'],
            $_POST['agama'],
            $_POST['kelamin'],
            $_POST['no_hp'],
            $_POST['email'],
            $_POST['id_prodi'],
            password_hash($_POST['password'], PASSWORD_DEFAULT)
        ]);

        header("Location: /login");
        exit;
    }

    public function login()
    {
        $db = Database::getInstance();

        $stmt = $db->prepare("SELECT * FROM mahasiswa WHERE email = ?");
        $stmt->execute([$_POST['email']]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user'] = [         
                'nim'  => $user['nim'],
                'nama' => $user['nama'],
            ];

            header("Location: /");
            exit;                         
        }
        header("Location: /login?error=1");
        exit;
    }

    public function logout()
    {
        session_destroy();               

        header("Location: /login");
        exit;
    }
}