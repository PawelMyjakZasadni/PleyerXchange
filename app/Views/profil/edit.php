<!-- app/Views/register.php -->

<!DOCTYPE html>
<html>
<head>
   
    <title>edycja profilu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .bg_reg_card{
    background-image:url('/public/assets/images/bg_reg.jpg');
    }
    </style>
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
                    <a class="nav-link" href="<?= site_url('yours_clab') ?>">Twój klub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('innyklub') ?>">Inne kluby</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= site_url('players') ?>" >piłkarze</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= site_url('') ?>">Oferty</a>
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
<div class="container ">
    <div class="row justify-content-center align-items-center vh-100 ">
        <div class="col-md-4 ">
            <div class="card bg_reg_card">
                <div class="card-body border border-dark">
                    <h3 class="text-center mb-4 h3">edycja profilu</h3>
                
                        <form method="post" action="<?=base_url('profil//update') ?>">
                            <div class="form-group">
                            <label for="name" class="h5" >Imię i nazwisko:</label>
                                <input type="text" class="form-control" name="name" id="name" value="" required>
                            </div>
                            <div class="form-group">
                            <label for="email" class=" h5">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" value="" required>
                            </div>
                            <div class="form-group">
                            <label for="password" class=" h5">Hasło:</label>
                                <input type="password" class="form-control" value="" name="password" id="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="h5">Potwierdź hasło:</label>
                                <input type="password" class="form-control" value="" name="confirm_password" id="confirm_password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">edycja save</button>
                                <a href="<?= base_url('mojprofil') ?>" class="btn btn-danger float-right" > back</a>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

