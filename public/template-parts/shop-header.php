<!doctype html>
<html lang="it">
  <head>
    <title>Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style2.css">
    <!-- Light Gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0-beta.2/css/lightgallery-bundle.min.css" integrity="sha512-rYeyP/7l5e89ap2He13nzhq2ksCEvohMZOdbMVTodaAkkQjDKXd4PVgkHy4AOLlFoJarfc8F2H854DjOQa5qdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body class="darker">
    <nav class="navbar navbar-dark  ">
      <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo ROOT_URL ?>">Ester Cardella</a>

          <div class="navbar nav ml-auto">

                  <ul class="navbar nav">
                    <li>
                      <a href="<?php echo ROOT_URL; ?>shop" class="text-white nav-link">
                        <i class=" fas fa-home"></i>

                      </a>
                    </li>
                    <li>
                      <a href="<?php echo ROOT_URL; ?>shop/?page=cart" class=" nav-link text-white">
                        <i class="fas fa-shopping-cart">
                          <span class="badge badge-pill js-totcartitems" style="  background: linear-gradient(#673ab7, #314da3);"></span>
                        </i>

                      </a>
                  </li>
                  </ul>

                  <!-- Utente Loggato -->

                  <?php  if ($loggedInUser && !($loggedInUser->is_admin)):  ?>
                    <div class="navbar nav dropdown show logs">
                      <a class="text-white  nav-item nav-link ml-auto btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $loggedInUser->email ?>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>auth/?page=logout">Logout</a>
                        <div class="dropdown-divider"> </div>
                        <a class="dropdown-item" href="#">Profilo</a>
                        <div class="dropdown-divider"> </div>
                        <a class="dropdown-item" href="#">I tuoi ordini</a>
                      </div>

                    </div>
                  <?php endif ?>                  
                  
                  <!-- Amministratore -->

                  <?php  if ($loggedInUser && $loggedInUser->is_admin):  ?>
                    <div class="navbar nav dropdown show logs">
                      <a class="text-white  nav-item nav-link ml-auto btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Admin
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>admin">Dashboard</a>
                        <div class="dropdown-divider"> </div>
                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>admin?pages=orders-list">Ordini</a>
                        <div class="dropdown-divider"> </div>
                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>admin?pages=product-list">Prodotti</a>
                        <div class="dropdown-divider"> </div>
                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>auth/?page=logout">Logout</a>
                      </div>
                    </div>
                  <?php endif ?>

                  <!-- Utente non Loggato  -->

                    <?php  if (!$loggedInUser):  ?>
                      <ul class="navbar nav ml-auto">
                        <a class="nav-link nav-item" href="<?php echo ROOT_URL; ?>auth/?page=login">
                          Login
                        </a>
                        <a  class="nav-link nav-item"  href="<?php echo ROOT_URL; ?>auth/?page=register">
                          Sign Up
                        </a>
                    </ul>
                  <?php endif ?>

              </div>
        </div>
    </nav>