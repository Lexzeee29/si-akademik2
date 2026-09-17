<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - <?= htmlspecialchars(APP_NAME) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-5">
        <h1 class="text-primary">Sistem Informasi Akademik</h1>
        <p class="lead">Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>.</p>

        <nav class="d-flex gap-2">
            <a class="btn btn-primary" href="<?= BASE_URL ?>/mahasiswa">Mahasiswa</a>
            <a class="btn btn-primary" href="<?= BASE_URL ?>/dosen">Data Dosen</a>
            <a class="btn btn-outline-danger" href="<?= BASE_URL ?>/logout">Logout</a>
        </nav>
    </main>
</body>
</html>