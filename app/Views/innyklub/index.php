<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona główna</title>
  <!-- Dodaj link do CSS Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Nawigacja -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= site_url('Home') ?>">Strona główna</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('twojklub') ?>">Twój klub</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Inne kluby</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Oferty</a>
        </li>
      </ul>
    </div>
    <div class="ml-auto">
      <a class="btn btn-primary" href="#">Wyloguj się</a>
    </div>
  </nav>

  <?php if (!empty($dane)) : ?>
        <ul>
            <?php foreach ($dane as $rekord) : ?>
                <li><?= $rekord['nazwa_klubu'] ?> </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Brak danych do wyświetlenia.</p>
    <?php endif; ?>
    
 

  <!-- Dodaj skrypty Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
