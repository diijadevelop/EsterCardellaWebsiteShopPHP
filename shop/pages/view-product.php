<?php

if(!defined('ROOT_URL')){
  die;
}

if(!(isset($_GET['id']))){
  echo "<script>location.href='".ROOT_URL."';</script>";
  exit;
}

$id = htmlspecialchars(trim($_GET['id']));
$pm = new ProductManager();
$product = $pm->get($id);


if(! (property_exists($product, 'id'))){
  echo "<script>location.href='".ROOT_URL."';</script>";
  exit;
}
?>

<section class="mb-5  pb-5" style="height: 100vh">
  <div class="container pt-5 mt-5 w-75 text-center text-md-right">
    <div class="jumbotrone mb-5 pb-5" style="height:100vh">
      <div class="row pb-5 my-5">
        <div class="col-md-4">
          <img data-enlargeable class="img-fluid rounded shadow-lg ml-md-5" src="<?php echo ROOT_URL . 'assets/img/store/stampe/stampa' . $product->id . '.jpg'?>" alt="">
        </div>
        <div class="col-md-8 pt-3 mb-5 pb-5">
          <h1 class="h1 text-light "><?php echo $product->name ?> </h1>
          <hr class="mx-auto mr-md-0">
          <p class="lead"><?php echo $product->description ?></p>
          <p class="text-secondary"><?php echo $product->price ?> €</p>
          <div class="mb-5">
            <a href="#" class="btn">Add to cart</a>
            <a href="#" class="btn">Buy now</a>
          </div>
        </div>
    </div>

    </div>
  </div>
</section>
<div class="py-5 my-5 d-md-none">

</div>
<div class="py-5 my-5 d-md-none">

</div>
