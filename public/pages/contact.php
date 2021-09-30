        <section class="mt-5">
        			<div class="container">
        				<div class="row mb-5 mb-md-5 align-items-center justify-content-center">
        					<div class="col-md-7" id="contact_box">
        						<div class="pl-20 pl-md-60">
        							<h4 class="h1 title textGradient mt-5 pt-md-5"> Contatta Ester </h4>
        							<p class="mt-15 mb-40">
        								Compila il form per inviare il tuo messaggio.							</p>


          <form name="formmail" method="post" action="assets/php/formmail.php" onsubmit="return controlloForm()">
                                  <input type="hidden" name="successo" value="http://www.miosito.com/pagina-successo.html">
          <div class="form-group">
            <input class="form-control"type="text" id="nome" name="nome" placeholder="Nome e Cognome*">

          </div>
          <div class="form-group">
            <input class="form-control"type="text" id="email" name="email" placeholder="Indirizzo di posta elettronica*">
          </div>
          <div class="form-group">
            <input class="form-control"type="text" id="tel" name="tel" placeholder="Numero di telefono">

          </div>
          <div class="form-group">
            <textarea class="form-control" id="msg" name="msg" placeholder="Scrivi il tuo messaggio*"></textarea>

          </div>

                        <input class="form-control textGradient btn text-uppercase" type="submit" value="Invia Richiesta">

                      </form>

								</div>
  					</div>

  				</div>
  			</div>
  		</section>
