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
    <a class="navbar-brand" href="#">Strona główna</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('twojklub') ?>">Twój klub</a>
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

  <div class="container">
    <h1>Formularz</h1>
    <form action="<?= site_url('twojklub') ?>" method="post">
      <div class="form-group">
        <label for="rokZalozenia">Rok założenia:</label>
        <input type="number" class="form-control" id="rokZalozenia" name="rokZalozenia" required>
      </div>
      <div class="form-group">
        <label for="menedzer">Menedżer:</label>
        <input type="text" class="form-control" id="menedzer" name="menedzer" required>
      </div>
      <div class="form-group">
        <label for="pracownicy">Pracownicy:</label>
        <input type="text" class="form-control" id="pracownicy" name="pracownicy" required>
      </div>
      <div class="form-group">
        <label for="pilkarze">Piłkarze:</label>
        <input type="text" class="form-control" id="pilkarze" name="pilkarze" required>
      </div>
      <button type="submit" class="btn btn-primary">Zapisz</button>
    </form>
  </div>

  <?php if (!empty($dane)) : ?>
        <ul>
            <?php foreach ($dane as $rekord) : ?>
                <li><?= $rekord['rok_zalozenia'] ?> - <?= $rekord['menedzer'] ?> - <?= $rekord['pracownicy'] ?> <?= $rekord['pilkarze'] ?></li>
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
