<?php

require_once __DIR__ . '/../../core/Database.php';

class JurusanController {
    public function createJurusan()
    {
        require __DIR__ . '/../views/jurusan/create.php';
    }

    public function storeJurusan()
    {
        $db   = Database::getInstance();
        $stmt = $db->prepare("INSERT INTO jurusan (nama_jurusan) VALUES (?)");
        $stmt->execute([$_POST['nama_jurusan']]);

        header("Location: /");
        exit;
    }
    
    public function editJurusan()
    {
        $db = Database::getInstance();

        $id   = $_GET['id'];
        $stmt = $db->prepare("SELECT * FROM jurusan WHERE id_jurusan = ?");
        $stmt->execute([$id]);
        $jurusan = $stmt->fetch(PDO::FETCH_ASSOC);

        require __DIR__ . '/../views/jurusan/edit.php';
    }

    public function updateJurusan()
    {
        $db   = Database::getInstance();
        $stmt = $db->prepare("UPDATE jurusan SET nama_jurusan=? WHERE id_jurusan=?");
        $stmt->execute([$_POST['nama_jurusan'], $_POST['id_jurusan']]);

        header("Location: /");
        exit;
    }

    public function deleteJurusan()
    {
        $db   = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM jurusan WHERE id_jurusan = ?");
        $stmt->execute([$_POST['id_jurusan']]);

        header("Location: /");
        exit;
    }
}