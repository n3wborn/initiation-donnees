<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

$sql='SELECT country_code AS Etat, COUNT(country_code) AS Nombre FROM datas GROUP BY country_code ORDER BY 2 DESC';

if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
    else{

?>
    <!-- on va mettre les resultat au centre ici -->
    <style type="text/css">
        tr, td { text-align: center;}
    </style>

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

    <?php } ?>
</main>
</body>
</html>
