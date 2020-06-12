<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

$sql="SELECT country_code AS Etat, COUNT(country_code) AS Quantité FROM datas GROUP BY country_code ORDER BY 2 ASC";

if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
else{
    ?>


    <main>
        <h2>Exercice 5</h2>
        <blockquote>Requête : Afficher la répartition par état et le nombre d’enregistrement par état (croissant)</blockquote>
        <code>SELECT country_code AS Etat, COUNT(country_code) AS Quantité FROM datas GROUP BY country_code ORDER BY 2 ASC</code>
        <table>
            <tr>
                <td class="coloredbg">Etat</td>
                <td class="coloredbg">Quantité</td>
            </tr>

            <?php
            foreach ($connexion->query($sql) as $row)
                echo "<tr><td>" .$row['Etat']. "</td><td>" . $row['Quantité']. "</td></tr>\n";
            ?>
        </table>

    <?php } ?>
</main>
</body>
</html>
