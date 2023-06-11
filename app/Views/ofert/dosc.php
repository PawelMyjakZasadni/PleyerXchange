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
    <a class="navbar-brand" href=<?= site_url('sesja') ?>>Strona główna</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('wypiszklub') ?>">Twój klub</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('innyklub') ?>">Inne kluby</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('ofert') ?>">Oferty</a>
        </li>
      </ul>
    </div>
    <div class="dropdown ml-auto">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-ellipsis-h"></i>
  </button>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="<?= site_url('mojprofil') ?>">Mój profil</a>
  <a class="dropdown-item" href="<?= site_url('wyloguj') ?>">Wyloguj</a>
  </div>
    </div>
  </nav>

  <h1>kiedyś sie edytują </h1>

</body>
</html>
