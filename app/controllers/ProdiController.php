<?php

require_once __DIR__ . '/../../core/Database.php';

class ProdiController {
    public function createProdi()
    {
        $db      = Database::getInstance();
        $jurusan = $db->query("SELECT * FROM jurusan")->fetchAll(PDO::FETCH_ASSOC);

        require __DIR__ . '/../views/prodi/create.php';
    }

    public function storeProdi()
    {
        $db   = Database::getInstance();
        $stmt = $db->prepare("INSERT INTO prodi (nama_prodi, id_jurusan) VALUES (?, ?)");
        $stmt->execute([$_POST['nama_prodi'], $_POST['id_jurusan']]);

        header("Location: /");
        exit;
    }
    public function editProdi()
    {
        $db = Database::getInstance();

        $id   = $_GET['id'];
        $stmt = $db->prepare("
            SELECT p.*, j.nama_jurusan 
            FROM prodi p 
            JOIN jurusan j ON p.id_jurusan = j.id_jurusan 
            WHERE p.id_prodi = ?
        ");
        $stmt->execute([$id]);
        $prodi = $stmt->fetch(PDO::FETCH_ASSOC);

        $jurusan = $db->query("SELECT * FROM jurusan")->fetchAll(PDO::FETCH_ASSOC);

        require __DIR__ . '/../views/prodi/edit.php';
    }

    public function updateProdi()
    {
        $db   = Database::getInstance();
        $stmt = $db->prepare("UPDATE prodi SET nama_prodi=?, id_jurusan=? WHERE id_prodi=?");
        $stmt->execute([
            $_POST['nama_prodi'],
            $_POST['id_jurusan'],
            $_POST['id_prodi']
        ]);

        header("Location: /");
        exit;
    }

    public function deleteProdi()
    {
        $db   = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM prodi WHERE id_prodi = ?");
        $stmt->execute([$_POST['id_prodi']]);

        header("Location: /");
        exit;
    }
}