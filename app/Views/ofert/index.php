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
     
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4> oferty  <a href="<?php echo site_url('ofert-add'); ?>" class="btn btn-primary float-right">oferta zrób</a> </h4>
                   
                </div>
                <div class="card-body">
                    <table class="table table table-bordered" id="mydatatable">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>user_id</th>
                                <th>Cost</th>
                                <th>action</th>
                            </tr>
                        </thead>

                         <tbody>
                            <?php foreach($offers as $row) :?>
                         <tr>
                             <td><?= $row['id']   ?> </td>
                             <td><?= $row['id_user']   ?> </td>
                             <td><?= $row['Cost']   ?> </td>
                           
                             <td>
                              <a href="<?= site_url('ofert/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                             </td>
                            
                        </tr>
                            <?php endforeach; ?>

                            <!-- <php foreach($offers as $offer): ?>
    <tr>
        <td>
            <ul>  
                <li>?= $offer['name_oferta'] ?></li>  Przykładowe pole oferty 
            </ul>
        </td>
        <td>
            <a href="<= site_url('ofert/delete/'.$offer['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
<php endforeach; ?> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
