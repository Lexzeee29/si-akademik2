<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <main class="container py-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                <div>
                    <h1 class="text-primary mb-1">Politeknik Negeri Jember</h1>
                    <h2 class="h4 text-secondary mb-0">Daftar Mahasiswa</h2>
                </div>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-primary" href="<?= BASE_URL ?>/mahasiswa/detail?nim=23002">Halaman Baru</a>
                    <a class="btn btn-primary" href="<?= BASE_URL ?>/dashboard">Kembali ke Dashboard</a>
                </div>
            </div>

            <?php if (isset($mahasiswa) && is_array($mahasiswa)): ?>
                <div class="table-responsive shadow-sm rounded">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-primary">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Nama Dosen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mahasiswa as $mhs): ?>
                                <tr>
                                    <td><?= htmlspecialchars($mhs['nim']) ?></td>
                                    <td><?= htmlspecialchars($mhs['nama']) ?></td>
                                    <td><?= htmlspecialchars($mhs['prodi']) ?></td>
                                    <td><?= htmlspecialchars($mhs['nama_dosen'] ?? '-') ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-secondary" href="<?= BASE_URL ?>/mahasiswa/detail?nim=<?= urlencode($mhs['nim']) ?>">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-info">Data mahasiswa belum tersedia.</div>
            <?php endif; ?>
        </main>
    </body>
</html>