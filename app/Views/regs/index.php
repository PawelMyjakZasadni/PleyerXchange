<!-- app/Views/register.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Rejestracja</title>
</head>
<body>
    <h1>Rejestracja</h1>

    <?php if (isset($validation)): ?>
        <div class="errors">
            <?php foreach ($validation as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('Regs') ?>">
        <div>
            <label for="name">Imię i nazwisko:</label>
            <input type="text" name="name" id="name" value="" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="" required>
        </div>
        <div>
            <label for="password">Hasło:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="confirm_password">Potwierdź hasło:</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>
        <div>
            <button type="submit">Zarejestruj się</button>
        </div>
    </form>
</body>
</html>
