<?php
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../core/Env.php';
Env::load(__DIR__ . '/../.env');

$router = new Router();

$home = new HomeController();

$auth = new AuthController();

$router->get('/', [$home, 'index']);

$router->get('/register', [$auth, 'showRegister']);
$router->post('/register', [$auth, 'register']);

$router->get('/login', [$auth, 'showLogin']);
$router->post('/login', [$auth, 'login']);

$router->resolve($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
