<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona główna</title>
  <!-- Dodaj link do CSS Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"/>
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

    <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4> club data </h4>
                </div>
                <div class="card-body">
                    <table class="table table table-bordered" id="mydatatable">
                        <thead>
                            <tr>
                                <th>name_club</th>
                                <th>league</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($club as $row) :?>
                         <tr>
                             <td><?= $row['name_club']   ?> </td>
                             <td><?= $row['league']   ?> </td>
                             
                            
                        </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
  <footer class="bg-dark text-light py-3 fixed-bottom">
        <div class="container">
            <p class="text-center">&copy; 2023 Giełda. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>
    
 

  <!-- Dodaj skrypty Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready(function() {
        $('#mydatatable').DataTable();
      })
  </script>
</body>
</html>
