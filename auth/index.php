<?php
  $page = isset($_GET["page"]) ? $_GET["page"] : 'login';
 ?>

<?php include '../inc/init.php' ?>

<?php include ROOT_PATH . 'public\template-parts\header.php' ?>

<?php include ROOT_PATH . 'auth/pages/' . $page . '.php'?>

<?php include ROOT_PATH . 'public/template-parts/footer.php' ?>
