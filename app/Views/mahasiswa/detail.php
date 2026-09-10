<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <main class="container py-5">
            <h1 class="text-primary mb-4">Detail Mahasiswa</h1>

            <?php if (isset($mahasiswa) && $mahasiswa): ?>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?= htmlspecialchars($mahasiswa['nim']) ?></p>
                        <p><strong>Nama:</strong> <?= htmlspecialchars($mahasiswa['nama']) ?></p>
                        <p class="mb-0"><strong>Prodi:</strong> <?= htmlspecialchars($mahasiswa['prodi']) ?></p>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-warning">Data mahasiswa tidak ditemukan.</div>
            <?php endif; ?>

            <a class="btn btn-secondary" href="<?= BASE_URL ?>/mahasiswa">Kembali</a>
        </main>
    </body>
</html>