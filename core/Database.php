<?php

require_once __DIR__ . '/Env.php';
Env::load(__DIR__ . '/../.env');

class Database {
    private static $instance = null;
    private $conn;

    private function __construct() {
        $host = Env::get('DB_HOST', 'db');
        $dbname = Env::get('DB_NAME', 'app_db');
        $username = Env::get('DB_USER', 'user');
        $password = Env::get('DB_PASS', 'password');
        $port = Env::get('DB_PORT', '3306');

        try {
            $this->conn = new PDO(
                "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
                $username,
                $password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("DB Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->conn;
    }
}