<?php include '../inc/init.php' ?>
<?php include ROOT_PATH . 'public\\template-parts\\header.php' ?>

      <section class="bg-home">
	      <div class="container first-content mt-5">
	        <div class="row no-gutters align-items-center ">
	          <div class="col-md-7 py-5 my-5 mx-0 px-0">
                <h1 class="h1 title textGradient mt-md-5">About me</h1>
                <hr style="width:60%;">
                <p class="text-light article">
                  Ester Cardella nata a Palermo classe '92 ha studiato al liceo artistico e alla scuola del fumetto della sua città.
      Subito dopo gli studi comincia a lavorare con diversi committenti privati, comincia così a fare esperienza nel mondo delle illustrazioni a tema erotico e dark, dando una personalità alle donne che disegna, rendendole forti e indipendenti, oltre che ammiccanti e sensuali, coscienti della propria bellezza.
</p>
      <a href="bio.php"><button type="button" class="btn btn-lg">Read More</button>
      </a>
	          </div>
	        </div>
	      </div>
	    </section>

      <section class="gallery ">
        <div class="container  mt-5 ">
          <div class="row no-gutters align-items-center ">
            <div class="col-md-5 py-5 mx-0 px-0 order-1">
              <!--   <img src="assets/img/triangle.png" alt="Donna con lince" class="triangle img-fluid">
            -->

            <div id="carousel" class="carousel vert slide" data-ride="carousel" data-interval="3100">

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block mx-auto img-fluid" src="assets/img/details/cowgirl_300_detail.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block mx-auto img-fluid" src="assets/img/details/cemetery_300_details.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block mx-auto img-fluid" src="assets/img/details/Donna_con_Lince_ink_details.jpg" alt="Third slide">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 py-5 mx-0 px-0">
            <h1 class="h1 title textGradient mt-md-5 w-100">The Best Works</h1>
            <hr style="width:60%;">
            <p class="article text-light">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="gallery.php"><button type="button" class="btn btn-lg">Gallery</button>
              </a>
            </div>
          </div>
        </section>
    </div>
  </div>

  <?php include ROOT_PATH . 'public/template-parts/footer.php' ?>
