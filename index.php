// J'appelle mon header et lance ma connection
<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

$req = $base->query("SELECT * FROM `datas` WHERE `last_name` = 'palmer'");