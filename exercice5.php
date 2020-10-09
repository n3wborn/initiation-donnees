<?php require_once "header.php"; ?>
<?php require_once "db-connect.php"; ?>

<?php

$sql='SELECT country_code AS Etat, COUNT(country_code) AS Nombre FROM datas GROUP BY country_code ORDER BY 2 DESC';

//essaye d'afficher le contenu avec le resultat de la requete
try {
 $connexion->query($sql)
 ?>

 <main>
  <h2>Exercice 5</h2>
  <blockquote>Requête : Afficher la répartition par état et le nombre d’enregistrement par état (croissant)</blockquote>
  <code>SELECT country_code AS Etat, COUNT(country_code) AS Nombre FROM datas GROUP BY country_code ORDER BY 2 DESC</code>
  <table>
    <tr>
      <td class="coloredbg">Etat</td>
      <td class="coloredbg">Quantité</td>
    </tr>

    <?php
    foreach ($connexion->query($sql) as $row)
      echo "<tr><td>" .$row['Etat']. "</td><td>" . $row['Nombre']. "</td></tr>\n";
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