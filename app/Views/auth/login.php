<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - <?= htmlspecialchars(APP_NAME) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-5" style="max-width: 480px;">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h1 class="h3 text-primary mb-4">Login</h1>

                <?php if (!empty($error)): ?>
                     <div class="alert alert-danger">
                         <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <form method="post" action="<?= BASE_URL ?>/login/process">
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" id="password" name="password" type="password" required>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>