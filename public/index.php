<?php
session_start();
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/controllers/JurusanController.php';  // tambah
require_once __DIR__ . '/../app/controllers/ProdiController.php';     // tambah
require_once __DIR__ . '/../core/Env.php';
Env::load(__DIR__ . '/../.env');

$router = new Router();
$home   = new HomeController();
$auth   = new AuthController();
$mhs    = new MahasiswaController();
$jur    = new JurusanController();   
$prd    = new ProdiController();     

$router->get('/', [$home, 'index']);

$router->get('/register', [$auth, 'showRegister']);
$router->post('/register', [$auth, 'register']);

$router->get('/login', [$auth, 'showLogin']);
$router->post('/login', [$auth, 'login']);

$router->get('/logout', [$auth, 'logout']);

$router->get('/mahasiswa/edit', [$mhs, 'editMahasiswa']);
$router->post('/mahasiswa/update', [$mhs, 'updateMahasiswa']);
$router->post('/mahasiswa/delete', [$mhs, 'deleteMahasiswa']);

$router->get('/jurusan/create', [$jur, 'createJurusan']);
$router->post('/jurusan/store', [$jur, 'storeJurusan']);
$router->get('/jurusan/edit', [$jur, 'editJurusan']);
$router->post('/jurusan/update', [$jur, 'updateJurusan']);
$router->post('/jurusan/delete', [$jur, 'deleteJurusan']);

$router->get('/prodi/create', [$prd, 'createProdi']);
$router->post('/prodi/store', [$prd, 'storeProdi']);
$router->get('/prodi/edit', [$prd, 'editProdi']);
$router->post('/prodi/update', [$prd, 'updateProdi']);
$router->post('/prodi/delete', [$prd, 'deleteProdi']);

$router->resolve($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);