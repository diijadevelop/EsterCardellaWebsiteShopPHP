<?php
$cm= new CartManager();
$cartId = $cm->getCurrentCartId();
$cart_total = $cm->getCartTotal($cartId);

?>

<footer id="footer" class="pb-50 pb-md-100">
  <div class="footer-bg">

  </div>
  <div class="container footer-content">
    <div class="text-center">
      <p class="footer-logo">Ester Cardella</p>
    </div>
    <ul id="nav-footer" class="nav justify-content-center text-uppercase font-weight-bold text-center text-sm-left d-block d-sm-flex">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>public/?page=bio">&nbsp;&nbsp;&nbsp;Bio&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>public/?page=gallery">&nbsp;&nbsp;&nbsp;Gallery&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>public/?page=contact">&nbsp;&nbsp;&nbsp;Contatti&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>shop">&nbsp;&nbsp;&nbsp;Shop&nbsp;&nbsp;&nbsp;</a>
      </li>
    </ul>
    <hr class="mx-auto my-30 my-md-40">
    <ul id="nav-footer-social" class="nav justify-content-center text-uppercase font-weight-bold">
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/ester_cardella_/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:estercardella@gmail.com" target="_blank" title="Email"><i class="fas fa-envelope"></i></a>
      </li>
      <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/EsterDarklyReset" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.deviantart.com/estercardella?fbclid=IwAR16D7P5j-uWA24KvQ8jSdPrHontvrmHsr106L7T7_5vWJgUK9zw13p5BdI" target="_blank" title="Deviantart"><i class="fab fa-deviantart"></i></a>
      </li>
      <li class="nav-item">
                <a class="nav-link" title="ArtStation"href="https://l.facebook.com/l.php?u=https%3A%2F%2Festercardella.artstation.com%2F%3Ffbclid%3DIwAR0y7fkmBvAtrg80_KY09QBFXrzt3-v2LFBv7c4y0xs1ql3cIc2798WCLyw&h=AT00sNvpwaGH9Myd7ewVQ083R0pAVv-S2pBYcP8oOjzdGU3sXgDnSaYrmhEL1cifRPBHuA4TLXYq1WHqVUoni4ppRnDtL9gySNf3MdRGnHrBreiJzc5LSk_iVN-9H5zFE-SnHQ" target="_blank"><i class="fab fa-artstation"></i></a>
      </li>

    </ul>
    <section id="privacy" class="mt-50 mt-md-100 text-light text-center w-75 w-lg-50 mx-auto">
      <p>
        © Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
      </p>
    </section>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/78ffc68b9f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/lightgallery.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0-beta.2/plugins/fullscreen/lg-fullscreen.min.js" integrity="sha512-DzxO8pqFx7E5gbBhlJcqI2KYWMs14FWl4oFYHLOEj2/Ju6dIuUhwZDGRailzJHLAym4co2Z+nnhrCuy6ht/NqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0-beta.2/plugins/zoom/lg-zoom.min.js" integrity="sha512-0mtVOmUIpVwfDhhqVsG6tbynJh6BSKhw4WTNGB9GAhQrpy/4ZmB6KO/5hY70VRV7i8SRCXUkohPsqxPguEh9Lw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0-beta.2/plugins/thumbnail/lg-thumbnail.min.js" integrity="sha512-wmnYlU0dJBHofmlz4UloFCz/k39StVgxOAVMr5HYHPEbEYNGbgvGoD5yLMln07hvbDYpDJyW0sHU2BVjDgiIXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
lightGallery(document.getElementById('lightgallery'), {
  plugins: [lgZoom, lgThumbnail, lgFullscreen],
});

</script>
<script>
  $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
  var src = $(this).attr('src');
  var modal;

  function removeModal() {
    modal.remove();
    $('body').off('keyup.modal-close');
  }
  modal = $('<div>').css({
    background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
    backgroundSize: 'contain',
    width: '100%',
    height: '100%',
    position: 'fixed',
    zIndex: '10000',
    top: '0',
    left: '0',
    cursor: 'zoom-out'
  }).click(function() {
    removeModal();
  }).appendTo('body');
  //handling ESC
  $('body').on('keyup.modal-close', function(e) {
    if (e.key === 'Escape') {
      removeModal();
    }
  });
});
</script>

<script src="<?php echo ROOT_URL; ?>assets/js/main.js"></script>

<script>
$(document).ready(function(){
    $('.js-totcartitems').html('<?php echo $cart_total['num_products']?>');
});
</script>


</body>
</html>
