<?php require_once "header.php"; ?>
<?php require_once "db-connect.php"; ?>

<?php

$sql="SELECT AVG(TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE())) AS Moyenne FROM datas";

//essaye d'afficher le contenu avec le resultat de la requete
try {
 $connexion->query($sql)
?>

  <main>
    <h2>Exercice 8 b</h2>
    <blockquote>Requête : Afficher la moyenne d' age</blockquote>
    <code>SELECT AVG(TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE())) AS Moyenne FROM datas</code>

    <table>
      <tr>
        <td class="coloredbg">Moyenne</td>
      </tr>

      <?php
      foreach ($connexion->query($sql) as $row)
        echo "<tr><td>" .$row['Moyenne']. "</td></tr>\n";
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