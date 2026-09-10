<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

$url = trim($_GET['url'] ?? '', '/');
$authController = new AuthController();

if ($url === '' || $url === 'login') {
    $authController->login();
} elseif ($url === 'login/process' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $authController->processLogin();
} elseif ($url === 'logout') {
    $authController->logout();
} elseif ($url === 'dashboard') {
    $middleware = new AuthMiddleware();
    $middleware->handle();
    require_once __DIR__ . '/../app/Views/dashboard/index.php';
} elseif ($url === 'mahasiswa') {
    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new MahasiswaController();
    $controller->index();
} elseif ($url === 'mahasiswa/detail') {
    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new MahasiswaController();
    $controller->detail();
} elseif ($url === 'dosen') {
    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new DosenController();
    $controller->index();
} else {
    http_response_code(404);
    echo 'Halaman tidak ditemukan.';
}