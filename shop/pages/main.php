<?php

if(!defined('ROOT_URL')){
  die;
}

?>

<div class="container d-flex justify-content-center">

  <div class="row mt-5" style="height: 100vh">

    <div class="col-12 col-md-6">
      <div class=" shadow">
        <a href="<?php echo ROOT_URL; ?>shop/?page=product-list">
          <img class="card-img-top w-100 img-fluid main-card-img" src="<?php echo ROOT_URL; ?>assets\img\low\cowgirl_300-low.jpg" alt="Card image poster">
        </a>
        <div class="card-body text-center">
          <h5 class="card-title h1 textGradient">Posters!</h5>
          <p class="card-text">Le stampe pronte all'acquisto delle mie illustrazioni.</p>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class=" shadow">
        <a href="<?php echo ROOT_URL; ?>shop/?page=product-list">
          <img class="card-img-top main-card-img" src="<?php echo ROOT_URL; ?>assets/img/store/tshirt.jpg" alt="Card image poster">
        </a>
        <div class="card-body text-center">
          <h5 class="card-title h1 textGradient">T-Shirts!</h5>
          <p class="card-text">Magliette fighissime.</p>
        </div>
      </div>
    </div>

  </div>

</div>
