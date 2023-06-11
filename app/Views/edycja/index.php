<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mój Profil</title>
  <!-- Dodaj link do CSS Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <!-- Nawigacja -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= site_url('sesja') ?>">Strona główna</a>
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
    <div class="ml-auto">
      <a class="btn btn-primary" href="<?= site_url('wyloguj') ?>">wyloguj sie </a>
    </div>
  </nav>

  <!-- Treść strony -->
  <form action="<?= site_url('edycjaprof') ?>" method="post">
  <div class="form-group">
    <label for="name">Nazwa użytkownika</label>
    <input type="text" class="form-control" id="name" name="name"  required>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email"  required>
  </div>
  <button type="submit" class="btn btn-primary">Zapisz</button>
</form>

  <!-- Dodaj skrypty Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
