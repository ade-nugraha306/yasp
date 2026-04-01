<?php

require_once __DIR__ . '/../../core/Database.php';

class HomeController {
    public function index()
    {
        $db = Database::getInstance();

        // Mahasiswa
        $stmt = $db->query("
            SELECT m.*, 
                p.nama_prodi, 
                j.nama_jurusan
            FROM mahasiswa m
            JOIN prodi p ON m.id_prodi = p.id_prodi
            JOIN jurusan j ON p.id_jurusan = j.id_jurusan
        ");
        $mahasiswa = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Jurusan
        $stmt = $db->query("SELECT * FROM jurusan");
        $jurusan = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Prodi
        $stmt = $db->query("
            SELECT p.*, j.nama_jurusan
            FROM prodi p
            JOIN jurusan j ON p.id_jurusan = j.id_jurusan
        ");
        $prodi = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // 🔥 buffer view
        ob_start();
        require __DIR__ . '/../views/home/home.php';
        $content = ob_get_clean();

        // kirim ke layout
        require __DIR__ . '/../layouts/layout.php';
    }
}