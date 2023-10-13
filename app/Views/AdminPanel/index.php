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




  <!-- Treść strony -->
  <div class="container">
    witamy w panelu admina 
  
    <div class="card-body">
        <h4>club data 
        </h4>
        <?php
            if(session()->getflashdata('status'))
            {
                echo "<h4>".session()->getFlashdata('status')."</h4>";
            }
        ?>
                    <div>
                    <table class="table table-bordered" id="mydatatable1">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name_club</th>
                                <th>league</th>
                                <th>Action  <a href="<?= base_url('AdminPanel-add') ?>" class="btn btn-primary float-right" > add club</a></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($club as $row) :?>
                         <tr>
                             <td><?= $row['id']   ?> </td>
                             <td><?= $row['name_club']   ?> </td>
                             <td><?= $row['league']   ?> </td>
                             <td>
                              <a href="<?= site_url('AdminPanel/edit/'.$row['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                              <a href="<?= site_url('AdminPanel/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                             </td>
                             
                            
                        </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
                    <h4>players data 
            
        </h4>
        
                    <div>
                    <table class="table table-bordered" id="mydatatable2">
                        <thead>
                            <tr>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>club</th>
                                <th>age</th>
                                <th>position</th>
                                <th>price</th>
                                <th>action  <a href="<?= base_url('AdminPanel-addP') ?>" class="btn btn-primary float-right" > add players </a></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($players as $row) :?>
                         <tr>
                             <td><?= $row['first_name']   ?> </td>
                             <td><?= $row['last_name']   ?> </td>
                             <td><?= $row['club']   ?> </td>
                             <td><?= $row['age']   ?> </td>
                             <td><?= $row['position']   ?> </td>
                             <td><?= $row['price']   ?> </td>
                             <td>
                              <a href="<?= site_url('AdminPanel/editP/'.$row['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                              <a href="<?= site_url('AdminPanel/deleteP/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                             </td>
                            
                        </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
                    
                </div>



  </div>

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
