<?php

if(!defined('ROOT_URL')){
  die;
}

?>

<section class="p-5 m-5 container" style="height:100vh;">
    <div class="w-75 order-md-2 my-5 mx-auto">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="h1 textGradient">This is your cart:</span>
            <span class="badge badge-pill" style="  background: linear-gradient(#673ab7, #314da3);">3</span>
          </h4>
          <ul class="list-group mb-3">

            <li class="list-group-item border-bottom  d-flex justify-content-between lh-condensed p-4">
              <div class="row  w-100 align-items-center">
                <div class="col-6 col-lg-4">
                  <h6 class="my-0 text-dark">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <div class="col-6 col-lg-2">
                  <span class="text-muted">€ 12,00</span>
                </div>
                <div class="col-6 col-lg-4">
                  <div class="btn-group mb-3" role="group">
                    <button type="button" class="btn  btn-sm btn-secondary">-</button>
                    <span class="border px-3 mt-3 text-dark text-center">1</span>
                    <button type="button " class="btn  btn-sm btn-secondary">+</button>
                  </div>
                </div>
                <div class="col-6 col-lg-2">
                  <strong class="text-dark">€ 12,00</strong>
                </div>
              </div>
            </li>
            <li class="list-group-item border-bottom  d-flex justify-content-between lh-condensed p-4">
              <div class="row  w-100 align-items-center">
                <div class="col-6 col-lg-4">
                  <h6 class="my-0 text-dark">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <div class="col-6 col-lg-2">
                  <span class="text-muted">€ 12,00</span>
                </div>
                <div class="col-6 col-lg-4">
                  <div class="btn-group mb-3" role="group">
                    <button type="button" class="btn  btn-sm btn-secondary">-</button>
                    <span class="border px-3 mt-3 text-dark text-center">1</span>
                    <button type="button " class="btn  btn-sm btn-secondary">+</button>
                  </div>
                </div>
                <div class="col-6 col-lg-2">
                  <strong class="text-dark">€ 12,00</strong>
                </div>
              </div>
            </li>

            <li class="cart-total list-group-item d-flex justify-content-between p-4 text-dark">
              <div class="row w-100">
                <div class="col-6 col-lg-4">
                  <span>Total</span>
                </div>
                <div class="col-6 col-lg-2 offset-lg-6">
                <strong>$20</strong>
                </div>
              </div>
            </li>

          </ul>

          <hr class="w-100"/>

          <button class="btn btn-block">
            Check-Out
          </button>

        </div>
</section>
