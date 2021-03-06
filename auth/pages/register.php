<?php

if(!defined('ROOT_URL')){
  die;
}

?>
    <div class="container-fluid d-flex justify-content-center">

    <div class="card mt-5 pt-5">
    <article class="card-body mx-auto" style="max-width: 700px;">
    	<h4 class="card-title mt-3 textGradient h1 text-center">Create Account</h4>
    	<p>
    		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-google"></i>   Login via Google</a>
    		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
    	</p>
    	<p class="divider-text">
            <span class="bg-dark">OR</span>
        </p>
    	<form action="assets\php\register.php" method="post">

    	<div class="form-group input-group">
    		<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
    		 </div>
            <input name="" class="form-control" placeholder="Username" type="text" value="username">
        </div>
         <!-- form-group// -->

        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-envelope signup"></i> </span>
    		 </div>
            <input name="" class="form-control" placeholder="Email address" type="email" value="email">
        </div>
         <!-- form-group// -->

        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    		</div>

        	<input name="" class="form-control" placeholder="Phone number" type="text" value="phone">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    		</div>
            <input class="form-control" placeholder="Create password" type="password" value="password">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
        	<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    		</div>
            <input class="form-control" placeholder="Repeat password" type="password">
        </div> <!-- form-group// -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
        </div> <!-- form-group// -->
        <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
    </form>
    </article>
    </div> <!-- card.// -->

    </div>
    <!--container end.//-->
