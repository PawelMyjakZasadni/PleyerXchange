<!-- app/Views/register.php -->

<!DOCTYPE html>
<html>
<head>
   
    <title>Rejestracja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .bg_reg_card{
    background-image:url('/public/assets/images/bg_reg.jpg');
    }
    </style>
</head>
<body>
<div class="container ">
    <div class="row justify-content-center align-items-center vh-100 ">
        <div class="col-md-4 ">
            <div class="card bg_reg_card">
                <div class="card-body border border-dark">
                    <h3 class="text-center mb-4 h3">Rejestracja</h3>
                    <?php if (isset($validation)): ?>
                        <div class="text-danger">
                            <?php foreach ($validation as $error): ?>
                                <p><?= $error ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                        <form method="post" action="<?= base_url('Regs') ?>">
                            <div class="form-group">
                            <label for="name" class="h5" >Imię i nazwisko:</label>
                                <input type="text" class="form-control" name="name" id="name" value="" required>
                            </div>
                            <div class="form-group">
                            <label for="email" class=" h5">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" value="" required>
                            </div>
                            <div class="form-group">
                            <label for="password" class=" h5">Hasło:</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="h5">Potwierdź hasło:</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Zarejestruj się</button>
                                <a class="btn btn-primary" href="<?= site_url('Login') ?>">zaloguj sie</a>
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

