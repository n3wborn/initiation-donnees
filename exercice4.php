<?php require_once "header.php"; ?>
<?php require_once "db-connect.php"; ?>

<?php

$sql='SELECT first_name, last_name, email FROM `datas` WHERE `email` LIKE "%google%"';

//essaye d'afficher le contenu avec le resultat de la requete
try {
 $connexion->query($sql)
 ?>


 <style>
   /* empeche les emails de trop deborder dans cette page */
   tr, td:nth-child(2n+3) { text-align: left;}
 </style>

 <main>
  <h2>Exercice 4</h2>
  <blockquote>Requête : Afficher tous les emails qui contiennent google</blockquote>
  <code>SELECT first_name, last_name, email FROM `datas` WHERE `email` REGEXP '.?google.?'</code>
  <table>
    <tr>
      <td class="coloredbg">Prénom</td>
      <td class="coloredbg">Nom</td>
      <td class="coloredbg">Email</td>
    </tr>

    <?php
    foreach ($connexion->query($sql) as $row)
      echo "<tr><td>" .$row['first_name']. "</td><td>" . $row['last_name']."</td><td>" .$row['email']. "</td></tr>\n";
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