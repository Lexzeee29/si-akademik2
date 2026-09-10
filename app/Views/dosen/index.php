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
                <a class="btn btn-secondary" href="<?= BASE_URL ?>/dashboard">Kembali ke Dashboard</a>
            </div>

            <div class="table-responsive shadow-sm rounded">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-primary">
                        <tr>
                            <th>NIDN</th>
                            <th>Nama Dosen</th>
                                <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (($dosen ?? []) as $dataDosen): ?>
                            <tr>
                                <td><?= htmlspecialchars($dataDosen['nidn']) ?></td>
                                <td><?= htmlspecialchars($dataDosen['nama']) ?></td>
                                <td><?= htmlspecialchars($dataDosen['prodi']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>