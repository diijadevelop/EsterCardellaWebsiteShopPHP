<?php

if(!defined('ROOT_URL')){
  die;
}
$errMsg = ' ';
if (isset($_POST['login'])) {
  // logica di login...
  $email = htmlspecialchars(trim($_POST['email']));
  $password = htmlspecialchars(trim($_POST['password']));
  $userMgr = new UserManager();
  $result = $userMgr ->login($email, $password);

  if ($result) {
    echo '<script>location.href="'.ROOT_URL.'shop"</script>';
    exit;
  } else {
    $errMsg = 'Login Fallito...';
  };
};

?>

</div>
<div class="container" style="max-width: 450px;">
  <div class="d-flex justify-content-center h-100 ">
    <div class=" card my-5 border-light" style="background:black;">
      <div class="card-header">
        <h3>Sign In</h3>
        <!-- <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div> -->
      </div>
      <div class="card-body">
        <form method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input name="email" type="text" class="form-control" placeholder="email">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input name="password" type="password" class="form-control" placeholder="password">
          </div>
          <div class="text-danger mb-3">
            <?php if($errMsg){echo $errMsg;};?>
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input type="submit" name="login" value="Login" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="register.php">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>
