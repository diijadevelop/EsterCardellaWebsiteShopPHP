<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 'shop.php';
 ?>

<?php include '../../inc/init.php' ?>

<?php include ROOT_PATH . 'public\template-parts\shop-header.php' ?>

<?php include ROOT_PATH . 'public/shop/pages/' . $page ?>

<?php include ROOT_PATH . 'public\template-parts\footer.php' ?>
