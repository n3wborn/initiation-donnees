<?php
$dsn = 'mysql:dbname=initiation-donnees;host=mariadb';
$user = 'root';
$password = 'mariadb';

try {
  $connexion = new PDO($dsn, $user, $password);
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}
?>