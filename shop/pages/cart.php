<?php

if(!defined('ROOT_URL')){
  die;
}
$cm= new CartManager();
$cartId = $cm->getCurrentCartId();

if (isset($_POST['minus'])) {
  //rimuovo dal carrello
  $productId = htmlspecialchars(trim($_POST['id']));
  $cm->removeFromCart($productId, $cartId);
}

if (isset($_POST['plus'])) {
  //aggiungo al carrello
  $productId = htmlspecialchars(trim($_POST['id']));
  $cm->addToCart($productId, $cartId);
}
$cart_total = $cm->getCartTotal($cartId);
$cart_items = $cm->getCartItems($cartId);

?>

<section class="p-5 m-5 container" style="height:100vh;">
    <div class="w-75 order-md-2 my-5 mx-auto">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
<?php if(count($cart_items)>0): ?>
          <span class="h1 textGradient">Il tuo carrello:</span>
          <span class="badge badge-pill" style="  background: linear-gradient(#673ab7, #314da3);"><?php echo $cart_total['num_products']?> Prodott<?php if($cart_total['num_products']>1 || $cart_total['num_products']==0){ echo 'i'; }else{ echo 'o';}; ?></span>
        </h4>
        <ul class="list-group mb-3">
            <?php
              foreach($cart_items as $item):
            ?>

            <li class="list-group-item border-bottom  d-flex justify-content-between lh-condensed p-4">
              <div class="row  w-100 align-items-center">
                <div class="col-6 col-lg-4">
                  <h6 class="my-0 text-dark"><?php echo $item['name']?></h6>
                  <small class="text-muted"><?php echo $item['description']?></small>
                </div>
                <div class="col-6 col-lg-2">
                  <span class="text-muted">€ <?php echo $item['single_price']?></span>
                </div>
                <div class="col-6 col-lg-4">

                <form method="post">
                  <div class="btn-group mb-3" role="group">
                    <button name="minus"type="submit" class="btn  btn-sm btn-secondary">-</button>
                    <span class="border px-3 mt-3 text-dark text-center"><?php echo $item['quantity']?></span>
                    <button name="plus"type="submit " class="btn  btn-sm btn-secondary">+</button>
                    <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                  </div>
                </form>

                </div>
                <div class="col-6 col-lg-2">
                  <strong class="text-dark">€ <?php echo $item['total_price']?></strong>
                </div>
              </div>
            </li>

          <?php endforeach; ?>

            <li class="cart-total list-group-item d-flex justify-content-between p-4 text-dark">
              <div class="row w-100">
                <div class="col-6 col-lg-4">
                  <span>Total</span>
                </div>
                <div class="col-6 col-lg-2 offset-lg-6">
                <strong>€ <?php echo $cart_total['total']?></strong>
                </div>
              </div>
            </li>

          </ul>

          <hr class="w-100"/>

          <button class="btn btn-block">
            Check-Out
          </button>
        <?php else: ?>
          <div class="row w-100 p-5 text-center justify-content-center align-items-center">
            <p class="h1 text-light  ">Il tuo carrello è vuoto... <i class="fas fa-sad-tear"></i> <br /> <br> <span class="m-md-5"></span>...Torna a fare acquisti! <i class="fas fa-laugh-wink"></i> </p>
          </div>
<?php endif; ?>
        </div>
</section>
