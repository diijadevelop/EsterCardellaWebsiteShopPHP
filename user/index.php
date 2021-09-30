<?php
  $page = isset($_GET["page"]) ? $_GET["page"] : 'homepage.php';
 ?>

<?php include '../inc/init.php' ?>

<?php include ROOT_PATH . 'public\template-parts\header.php' ?>

<?php include ROOT_PATH . 'public/pages/' . $page ?>

<?php include ROOT_PATH . 'public/template-parts/footer.php' ?>
