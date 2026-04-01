<?php

require_once __DIR__ . '/../../core/Database.php';

class MahasiswaController {
    public function editMahasiswa()
    {
        $db = Database::getInstance();
        
        $nim = $_GET['nim'];
        
        $stmt = $db->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
        $stmt->execute([$nim]);
        
        $mhs = $stmt->fetch(PDO::FETCH_ASSOC);
        
        require __DIR__ . '/../views/mahasiswa/edit.php';
    }
    public function updateMahasiswa()
    {
        $db = Database::getInstance();

        $stmt = $db->prepare("
            UPDATE mahasiswa 
            SET nama=?, email=?, no_hp=? 
            WHERE nim=?
        ");

        $stmt->execute([
            $_POST['nama'],
            $_POST['email'],
            $_POST['no_hp'],
            $_POST['nim']
        ]);

        header("Location: /");
        exit;
    }
    public function deleteMahasiswa()
    {
        $db = Database::getInstance();

        $stmt = $db->prepare("DELETE FROM mahasiswa WHERE nim = ?");
        $stmt->execute([$_POST['nim']]);

        header("Location: /");
        exit;
    }
}