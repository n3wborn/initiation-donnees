<?php require_once "header.php"; ?>
<?php require_once "db-connect.php"; ?>

<?php

$sql = "SELECT gender AS Sexe, COUNT(*) As Qte FROM datas  GROUP BY datas.gender";

if(!$connexion->query($sql)) {
  echo "Y a un bug dans la matrice mec";
} else {
?>
    <!-- on va mettre les resultat au centre ici -->
    <style type="text/css">
        tr, td { text-align: center;}
    </style>

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

    <?php } ?>
</main>
</body>
</html>
