<?php require_once "header.php"; ?>
<?php require_once "db-connect.php"; ?>

<?php

$sql="SELECT first_name, last_name, gender, country_code FROM `datas` WHERE `country_code` REGEXP '^N.$'";

//essaye d'afficher le contenu avec le resultat de la requete
try {
 $connexion->query($sql)
 ?>


 <main>
  <h2>Exercice 3</h2>
  <blockquote>Requête : Afficher tous les etats dont la lettre commence par N</blockquote>
  <code>SELECT first_name, last_name, gender, country_code FROM `datas` WHERE `country_code` REGEXP '^N.$'</code>
  <table>
    <tr>
      <td class="coloredbg">Prénom</td>
      <td class="coloredbg">Nom</td>
      <td class="coloredbg">Pays</td>
    </tr>

    <?php
    foreach ($connexion->query($sql) as $row)
      echo "<tr><td>" .$row['first_name']. "</td><td>" . $row['last_name']."</td><td>" .$row['country_code']. "</td></tr>\n";
    ?>
  </table>

  <?php
  // si la requete sql a echouee
} catch (Exception $e) {
 echo 'La requete sql a echouée : ' . $e->getMessage();
}
?>

</main>
</body>
</html>