

<?php
  $page = isset($_GET["page"]) ? $_GET["page"] : 'main';
 ?>

<?php include '../inc/init.php' ?>

<?php include ROOT_PATH . 'public\template-parts\shop-header.php' ?>

<?php include ROOT_PATH . 'shop/pages/' . $page . '.php'?>

<?php include ROOT_PATH . 'public/template-parts/footer.php' ?>
