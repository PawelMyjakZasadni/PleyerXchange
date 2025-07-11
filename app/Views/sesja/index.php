<?php

$session = \Config\Services::session();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona główna</title>
  <!-- Dodaj link do CSS Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  

</head>
<body>
  <!-- Nawigacja -->


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
                    <a class="nav-link" href="<?= site_url('yours_clab') ?>">Twój klub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('innyklub') ?>">Inne kluby</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= site_url('players') ?>" >piłkarze</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= site_url('ofert') ?>">Oferty</a>
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




  <!-- Treść strony -->
   <!-- Główny kontener strony -->
 <div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Sekcja z notowaniami -->
            <section>
                <h1>Notowania</h1>
                <!-- Tabela z notowaniami -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nazwa Piłkarza</th>
                          
                            <th>Cena</th>
                            <th>Zmiana</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>imie </td>
                            
                            <td>100.00</td>
                            <td>+1.50%</td>
                        </tr>
                        <!-- Dodaj więcej wierszy z notowaniami -->
                    </tbody>
                </table>
            </section>

            <!-- Sekcja z wykresami -->
            <section>
                <h1>Wykresy</h1>
              







                <!-- Dodaj wykresy, na przykład wykresy liniowe lub słupkowe, używając bibliotek takich jak Chart.js -->
                <canvas id="lineChart" width="400" height="200"></canvas>
                <canvas id="barChart" width="400" height="200"></canvas>
            </section>
        </div>

        <!-- Sekcja z aktualnościami -->
        <div class="col-lg-4">
            <section>
                <h2>Aktualności</h2>
                <!-- Lista najnowszych aktualności -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5>Najdroszy piłkarz</h5>
                        <p> <?php 
          $db = db_connect();
    // Wykonaj zapytanie SQL
$query = $db->query('SELECT players.first_name, players.last_name, players.price FROM players ORDER BY players.price DESC LIMIT 1');

// Sprawdź, czy zapytanie zostało wykonane poprawnie
if ($query) {
    // Pobierz wynik zapytania jako tablicę
    $results = $query->getResultArray();

    if (!empty($results)) {
        // Pobierz dane z wyniku
        $first_name = $results[0]['first_name'];
        $last_name = $results[0]['last_name'];
        $price = $results[0]['price'];

        // Teraz masz dostęp do zmiennych $first_name, $last_name i $price
        echo "Imię: $first_name<br>";
        echo "Nazwisko: $last_name<br>";
        echo "Cena: $price<br>";
    } else {
        echo "Brak danych do wyświetlenia.";
    }
} else {
    echo "Błąd zapytania SQL: " . $this->$db->error();
}
?></p>
                    </li>
                    <li class="list-group-item">
                        <h5>najdroszy klub </h5>
                        <p>   <?php 
          $db = db_connect();
    // Wykonaj zapytanie SQL
$query = $db->query('SELECT club.name_club, SUM(players.price) AS total_price FROM club JOIN players ON club.id = players.club GROUP BY club.name_club ORDER BY total_price DESC LIMIT 1');

// Sprawdź, czy zapytanie zostało wykonane poprawnie
if ($query) {
    // Pobierz wynik zapytania jako tablicę
    $results = $query->getResultArray();

    if (!empty($results)) {
        // Pobierz dane z wyniku
        $name_club = $results[0]['name_club'];
        $price = $results[0]['total_price'];

        // Teraz masz dostęp do zmiennych $first_name, $last_name i $price
        echo "nazwa klubu: $name_club<br>";
        echo "Cena: $price<br>";
    } else {
        echo "Brak danych do wyświetlenia.";
    }
} else {
    echo "Błąd zapytania SQL: " . $this->$db->error();
}
?></p>
                    </li>
                    <!-- Dodaj więcej aktualności -->
                </ul>
            </section>
        </div>
    </div>
</div>
 <!-- Stopka -->
 <footer class="bg-dark text-light py-3 fixed-bottom">
        <div class="container">
            <p class="text-center">&copy; 2023 Giełda. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>
  <!-- Dodaj skrypty Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
