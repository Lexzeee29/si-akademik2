<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Dosen</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <main class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h1 class="h3 text-primary mb-4">Tambah Dosen</h1>

                            <form method="post" action="<?= BASE_URL ?>/dosen/store">
                                <div class="mb-3">
                                    <label class="form-label" for="nidn">NIDN</label>
                                    <input class="form-control" type="text" id="nidn" name="nidn" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input class="form-control" type="text" id="nama" name="nama" required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="bidang_keahlian">Bidang Keahlian</label>
                                    <input class="form-control" type="text" id="bidang_keahlian" name="bidang_keahlian" required>
                                </div>

                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <a class="btn btn-outline-secondary" href="<?= BASE_URL ?>/dosen">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
