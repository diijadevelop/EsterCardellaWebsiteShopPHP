<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }


function var_dump_pre($mixed = null) {
  echo '<pre class=" text-light" style="font-size: 1rem;  width:100%; margin-left: 10em;">';
  var_dump($mixed);
  echo '</pre>';
  return null;
}

 function esc($str) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars($str));
  }

  function esc_html($str) {
    return htmlspecialchars($str);
  }

  function shorten($str) {
    return substr($str, 0, 30) . '...';
  }

  function random_string(){
    return substr(md5(mt_rand()), 0, 20);
  }
