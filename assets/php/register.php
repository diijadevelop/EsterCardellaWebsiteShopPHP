<?php

require_once('config.php');

$email = $connessione->real_escape_string($_POST['email']);
$username = $connessione->real_escape_string($_POST['username']);
$password_utente = $connessione->real_escape_string($_POST['password']);
$number = $connessione->real_escape_string($_POST['phone']);

$hashed_password = password_hash($password_utente, PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (email, username, password, phone) VALUES ('$email', '$username', '$hashed_password' '$number')";
if($connessione->query($sql) === true){
  echo " Registrazione effettuata con successo. <a href='../login.php'>Accedi</a>";
}else{
  echo "Errore durante registrazione utente $sql. " . $connessione->error;


}

 ?>
