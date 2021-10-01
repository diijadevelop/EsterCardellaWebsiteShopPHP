<?php
$productMgr = new ProductManager();
$products = $productMgr->getAll();
//  $products = $productMgr->get(1);
//  $products = null;

?>

<div class="container d-flex justify-content-center  mt-5 pt-5">
    <div class="d-flex justify-content-center row mt-5 mx-auto">

<?php if($products) : ?>
<?php foreach($products as $product) : ?>

      <div class="col-lg-3 col-md-4 col-12 my-md-5">
        <div class="card card-product-list mx-auto border-dark " style="width: 15rem;">
            <img  data-enlargeable width="100"  style="cursor: zoom-in"  class="card-img-top rounded p-md-3" src="<?php echo ROOT_URL . 'assets/img/store/stampe/stampa' . $product->id . '.jpg' ?>" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title textGradient h1"><?php echo $product->name ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->price ?> €</h6>
                <p class="card-text"><?php echo $product->description ?></p>
                <div class="d-flex justify-content-between">
                  <a href="#" class="btn btn-primary">Buy Now</a>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
                <a href="<?php echo ROOT_URL . 'shop?page=view-product&id=' . $product->id?>" class="btn btn-primary w-100">Details</a>
            </div>
        </div>
      </div>

<?php endforeach; ?>
<?php else : ?>
    <p class="lead" style="width:100vw; height:100vh; text-align:center; align-self:center;">
      Nessun prodotto disponibile.
    </p>
<?php endif; ?>






    </div>
</div>
