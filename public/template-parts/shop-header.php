<!doctype html>
<html lang="it">
  <head>
    <title>Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  	<link rel="stylesheet" href="..\..\assets/css/style.css">
  	<link rel="stylesheet" href="..\..\assets/css/style2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0-beta.2/css/lightgallery-bundle.min.css" integrity="sha512-rYeyP/7l5e89ap2He13nzhq2ksCEvohMZOdbMVTodaAkkQjDKXd4PVgkHy4AOLlFoJarfc8F2H854DjOQa5qdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body class="darker">



  <header class="bg-transparent">
    <div class="px-3 mb-5">

      <div class="container-fluid">
        <div  class="nav navbar-expand-md d-flex flex-wrap align-items-center justify-content-between">
          <div class="colorlib-navbar-brand col-sm-12 col-md-auto">
	          <a class="colorlib-logo" href="<?php echo ROOT_URL; ?>public/?page=homepage">Ester Cardella</a>
	        </div>

           <div class="collapse navbar-collapse" id="navbarToggler">

          <ul class="nav col-lg-auto my-2 ml-4 flex-column-reverse flex-md-row align-items-end my-md-0 text-center">
            <li>
              <a href="<?php echo ROOT_URL; ?>public/shop/?page=shop" class="nav-link text-secondary">
                <i class="bi d-block mx-auto mb-1 fas fa-home"></i>
                Home
              </a>
            </li>
            <li>
              <a href="<?php echo ROOT_URL; ?>public/shop/?page=cart" class=" nav-link text-white">
                <i class="bi d-block mx-auto mb-1 fas fa-shopping-cart"></i>
                Carrello
              </a>
          </li>

                <li>
                  <a href="<?php echo ROOT_URL; ?>public/shop/?page=orders" class="nav-link text-white">
                  <i class="bi d-block mx-auto mb-1 far fa-calendar-alt"></i>
                  Orders
                  </a>
                </li>
              </ul>
            </div>
            <div class="logs">
                <a href="<?php echo ROOT_URL; ?>public/shop/?page=login">
                  <button type="button" class="btn mr-2">Login</button>
                </a>
                <a href="<?php echo ROOT_URL; ?>public/shop/?page=register">
                <button type="button" class="btn ">Sign-up</button>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
              <span class="navbar-toggler-icon"></span>
            </button>


          </div>
        </div>
        </div>
      </header>
