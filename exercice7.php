<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

$sql="SELECT gender AS Sexe, COUNT(*) AS Quantité FROM datas GROUP BY gender;";

if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
else{
    ?>


    <main>
        <h2>Exercice 7</h2>
        <blockquote>Requête : Afficher le nombre de femmes et d’hommes</blockquote>
        <code>SELECT gender AS Sexe, COUNT(*) AS Quantité FROM datas GROUP BY gender;</code>
        <table>
            <tr>
                <td class="coloredbg">Sexe</td>
                <td class="coloredbg">Quantité</td>
            </tr>

            <?php
            foreach ($connexion->query($sql) as $row)
                echo "<tr><td>" .$row['Sexe']. "</td><td>" . $row['Quantité']. "</td></tr>\n";
            ?>
        </table>

    <?php } ?>
</main>
</body>
</html>
