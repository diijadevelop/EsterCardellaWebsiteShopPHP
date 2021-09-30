<?php include 'template-parts\shop-header.php' ?>

	<div class="container my-5 py-5">
    <div class="row">
      <div class="col-md-5 mt-5 ">
          <img  class="w-100" id=featured src="https://www.seekpng.com/png/full/17-176282_free-vector-t-shirt-vector-template-t-shirt.png">
        <div id="slide-wrapper">
          <i id="slideLeft" class="arrow fas fa-arrow-circle-left mr-3"></i>
          <div id="slider">
            <img class="thumbnail active" src="https://www.seekpng.com/png/full/17-176282_free-vector-t-shirt-vector-template-t-shirt.png">
            <img class="thumbnail" src="https://www.seekpng.com/png/full/17-176282_free-vector-t-shirt-vector-template-t-shirt.png">
            <img class="thumbnail" src="https://www.seekpng.com/png/full/17-176282_free-vector-t-shirt-vector-template-t-shirt.png">

          </div>

          <i id="slideRight" class="arrow fas fa-arrow-circle-right ml-3"></i>

        </div>
      </div>

      <div class="col-md-7 mt-5">
        <h1 class="text-light">Esempio 1</h1>
        <hr>
        <h3 class="text-light">$89.99</h3>

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <div class="d-flex justify-content-md-end">
          <input value=1 type="number">
          <a class="btn btn-dark my-0 ml-3" href="#">Add to Cart</a>
        </div>
        <div class="d-flex justify-content-end">
          <a class="btn btn-dark" href="shop.php">Go Back</a>
        </div>
      </div>

    </div>


	</div>

	<?php include 'template-parts\footer.php' ?>
