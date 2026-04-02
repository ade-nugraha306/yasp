-- =========================
-- CLEAN INIT SQL (SAFE)
-- =========================

SET FOREIGN_KEY_CHECKS=0;

-- DROP TABLE (urutan aman)
DROP TABLE IF EXISTS mahasiswa;
DROP TABLE IF EXISTS prodi;
DROP TABLE IF EXISTS jurusan;

-- =========================
-- TABLE JURUSAN
-- =========================
CREATE TABLE jurusan (
  id_jurusan INT(2) NOT NULL AUTO_INCREMENT,
  nama_jurusan VARCHAR(100),
  PRIMARY KEY (id_jurusan)
) ENGINE=InnoDB;

INSERT INTO jurusan (id_jurusan, nama_jurusan) VALUES
(1, 'Teknologi Informasi');

-- =========================
-- TABLE PRODI
-- =========================
CREATE TABLE prodi (
  id_prodi INT(2) NOT NULL AUTO_INCREMENT,
  nama_prodi VARCHAR(40),
  id_jurusan INT(2),
  PRIMARY KEY (id_prodi)
) ENGINE=InnoDB;

INSERT INTO prodi (id_prodi, nama_prodi, id_jurusan) VALUES
(1, 'Teknik Informatika', 1);

-- =========================
-- TABLE MAHASISWA
-- =========================
CREATE TABLE mahasiswa (
  nim VARCHAR(9) NOT NULL,
  nama VARCHAR(50),
  tgl_lahir DATE,
  alamat VARCHAR(150),
  agama VARCHAR(1),
  kelamin VARCHAR(1),
  no_hp VARCHAR(15),
  email VARCHAR(100),
  id_prodi INT(2),
  password VARCHAR(255),
  PRIMARY KEY (nim)
) ENGINE=InnoDB;

SET FOREIGN_KEY_CHECKS=1;
