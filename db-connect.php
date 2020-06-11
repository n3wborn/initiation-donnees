<?php
$dsn = 'mysql:dbname=stephanep460_;host=localhost';
$user = 'stephanep460';
$password = 'lWKt+esA1AvVhA==';

try {
  $connexion = new PDO($dsn, $user, $password);
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}
?>