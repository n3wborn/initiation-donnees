<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

    $sql="SELECT gender AS Sexe, AVG(TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE())) AS Age FROM datas GROUP BY gender";

    if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
    else{
?>


    <body>
        <h2>Exercice 8 c</h2>
        
        <blockquote>Requête : Afficher la moyenne d'age hommes femmes</blockquote>

        <code>SELECT gender AS Sexe, AVG(TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE())) AS Age FROM datas GROUP BY gender</code>

        <table>
            <tr>
                <td class="coloredbg">Sexe</td>
                <td class="coloredbg">Age</td>
            </tr>

      <?php
        foreach ($connexion->query($sql) as $row)
            echo "<tr><td>" .$row['Sexe']. "</td><td>" .$row['Age']. "</td></tr>\n";        
      ?>
        </table>

    <?php } ?>

    </body>
</html>
