<!-- app/Views/offer_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Składanie oferty</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href=<?= site_url('sesja') ?>>Moja Strona</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href=<?= site_url('sesja') ?>>Strona Główna <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('wypiszklub') ?>">Twój klub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('innyklub') ?>">Inne kluby</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= site_url('players') ?>" >piłkarze</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= site_url('ofert/wofert') ?>">Oferty</a>
                </li>
                <li>
                <div class="dropdown ml-auto">
                  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                      </button>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="<?= site_url('mojprofil') ?>">Mój profil</a>
                               <a class="dropdown-item" href="<?= site_url('wyloguj') ?>">Wyloguj</a>
  </div>
                </li>
            </ul>
        </div>
    </nav>

  <h1>Składanie oferty</h1>

<?php if (isset($validation)): ?>
    <div class="errors">
        <?php foreach ($validation as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="post" action="<?= base_url('ofert') ?>" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="club_name" class="form-label">Nazwa klubu:</label>
        <input type="text" name="club_name" id="club_name" class="form-control" required>
        <div class="invalid-feedback">
            Pole jest wymagane.
        </div>
    </div>
    <div class="mb-3">
        <label for="manager" class="form-label">Menadżer:</label>
        <input type="text" name="manager" id="manager" class="form-control" required>
        <div class="invalid-feedback">
            Pole jest wymagane.
        </div>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Cena:</label>
        <input type="text" name="price" id="price" class="form-control" required>
        <div class="invalid-feedback">
            Pole jest wymagane.
        </div>
    </div>
    <div class="mb-3">
        <label for="rental_period" class="form-label">Okres wynajęcia:</label>
        <input type="text" name="rental_period" id="rental_period" class="form-control" required>
        <div class="invalid-feedback">
            Pole jest wymagane.
        </div>
    </div>
    <div class="mb-3">
        <label for="submitter" class="form-label">Składający:</label>
        <input type="text" name="submitter" id="submitter" class="form-control" required>
        <div class="invalid-feedback">
            Pole jest wymagane.
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Złóż ofertę</button>
    </div>
</form>

</body>
</html>
