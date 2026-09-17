<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Dosen</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <main class="container py-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                <div>
                    <h1 class="text-primary mb-1">Politeknik Negeri Jember</h1>
                    <h2 class="h4 text-secondary mb-0">Daftar Dosen</h2>
                </div>
                <div class="d-flex gap-2">
                    <a class="btn btn-success" href="<?= BASE_URL ?>/dosen/create">Tambah Dosen</a>
                    <a class="btn btn-primary" href="<?= BASE_URL ?>/dashboard">Kembali ke Dashboard</a>
                </div>
            </div>

            <?php if (isset($dosen) && is_array($dosen)): ?>
                <div class="table-responsive shadow-sm rounded">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Bidang Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dosen as $index => $item): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= htmlspecialchars($item['nidn']) ?></td>
                                    <td><?= htmlspecialchars($item['nama']) ?></td>
                                    <td><?= htmlspecialchars($item['bidang_keahlian']) ?></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-sm btn-outline-primary" href="<?= BASE_URL ?>/dosen/edit?id=<?= urlencode($item['id']) ?>">Edit</a>
                                            <a class="btn btn-sm btn-outline-danger" href="<?= BASE_URL ?>/dosen/delete?id=<?= urlencode($item['id']) ?>" onclick="return confirm('Hapus data dosen ini?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-info">Data dosen belum tersedia.</div>
            <?php endif; ?>
        </main>
    </body>
</html>