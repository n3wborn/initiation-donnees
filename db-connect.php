<?php
$dsn = 'mysql:dbname=stephanep460_;host=localhost';
$user = 'stephanep460';
$password = 'lWKt+esA1AvVhA==';

try {
  $base = new PDO($dsn, $user, $password);
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}
?>