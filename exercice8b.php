<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

    $sql="SELECT AVG(TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE())) AS Moyenne FROM datas";

    if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
    else{
?>


    <body>
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

    <?php } ?>

    </body>
</html>
