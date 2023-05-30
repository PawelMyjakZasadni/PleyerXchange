<!-- app/Views/offer_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Składanie oferty</title>
</head>
<body>
    <h1>Składanie oferty</h1>

    <?php if (isset($validation)): ?>
        <div class="errors">
            <?php foreach ($validation as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('ofert') ?>">
        <div>
            <label for="club_name">Nazwa klubu:</label>
            <input type="text" name="club_name" id="club_name" value="" required>
        </div>
        <div>
            <label for="manager">Menadżer:</label>
            <input type="text" name="manager" id="manager" value="" required>
        </div>
        <div>
            <label for="price">Cena:</label>
            <input type="text" name="price" id="price" value="" required>
        </div>
        <div>
            <label for="rental_period">Okres wynajęcia:</label>
            <input type="text" name="rental_period" id="rental_period" value="" required>
        </div>
        <div>
            <label for="submitter">Składający:</label>
            <input type="text" name="submitter" id="submitter" value="" required>
        </div>
        <div>
            <button type="submit">Złóż ofertę</button>
        </div>
    </form>
</body>
</html>
