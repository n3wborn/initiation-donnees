<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

    $sql="SELECT first_name AS Prénom, last_name AS Nom, TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE()) AS Age FROM datas LIMIT 25";

    if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
    else{
?>


    <body>
        <h2>Exercice 8 a</h2>
        
        <blockquote>Requête : Afficher l'âge de chaque personne</blockquote>

        <code>SELECT first_name AS Prénom, last_name AS Nom, TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE()) AS Age FROM datas</code>

        <table>
            <tr>
                <td class="coloredbg">Prénom</td>
                <td class="coloredbg">Nom</td>
                <td class="coloredbg">Age</td>
            </tr>

      <?php
        foreach ($connexion->query($sql) as $row)
            echo "<tr><td>" .$row['Prénom']. "</td><td>" . $row['Nom']."</td><td>" .$row['Age']. "</td></tr>\n";        
      ?>
        </table>

        <p>(Résultat tronqué à 25 résultats)</p>
    <?php } ?>

    </body>
</html>
