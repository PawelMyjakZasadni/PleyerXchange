<!-- app/Views/login.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Logowanie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Login</h3>
                        <?php if (isset($error)): ?>
                            <p class="text-danger"><?= $error ?></p>
                        <?php endif; ?>
                        <?php if (isset($validation)): ?>
                            <div class="text-danger">
                                <?php foreach ($validation as $error): ?>
                                    <p><?= $error ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?= base_url('login') ?>">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Hasło:</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Zaloguj się</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
