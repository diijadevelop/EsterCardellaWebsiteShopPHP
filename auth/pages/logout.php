<?php

if(!defined('ROOT_URL')){
  die;
}
unset($_SESSION['user']);
echo '<script>location.href="'.ROOT_URL.'shop"</script>';
exit;
?>
