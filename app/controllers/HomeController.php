<?php

require_once __DIR__ . '/../../core/Database.php';

class HomeController {
    public function index()
    {
        $db = Database::getInstance();

        // contoh query (ganti sesuai tabel kamu)
        $stmt = $db->query("SELECT * FROM jurusan");
        $jurusans = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $title = "Home";

        ob_start();
        require __DIR__ . '/../views/home/home.php';
        $content = ob_get_clean();

        require __DIR__ . '/../layouts/layout.php';
    }
}