<?php require_once "header.php"; ?>
<?php require_once "db-connect.php"; ?>

<?php

$sql = "SELECT gender AS Sexe, COUNT(*) As Qte FROM datas  GROUP BY datas.gender";

//essaye d'afficher le contenu avec le resultat de la requete
try {
 $connexion->query($sql)
 ?>

 <main>
  <h2>Exercice 7</h2>
  <blockquote>Requête : Afficher le nombre de femmes et d’hommes</blockquote>
  <code>SELECT gender AS Sexe, COUNT(*) As Qte FROM datas  GROUP BY datas.gender;</code>
  <table>
    <tr>
      <td class="coloredbg">Sexe</td>
      <td class="coloredbg">Qte</td>
    </tr>

    <?php
    foreach ($connexion->query($sql) as $row)
      echo "<tr><td>" .$row['Sexe']. "</td><td>" . $row['Qte']. "</td></tr>\n";
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