<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

    $sql="SELECT first_name, last_name, gender FROM `datas` WHERE `gender` = 'Female'";

    if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
    else{
?>



        <h2>Exercice 2</h2>
        <blockquote>Requête : Afficher toutes les femmes</blockquote>
        <code>SELECT first_name, last_name, gender FROM `datas` WHERE `gender` = 'Female'</code>
        <table>
            <tr>
                <td class="coloredbg">Prénom</td>
                <td class="coloredbg">Nom</td>
                <td class="coloredbg">Sexe</td>
            </tr>

      <?php
        foreach ($connexion->query($sql) as $row)
            echo "<tr><td>" .$row['first_name']. "</td><td>" . $row['last_name']."</td><td>" .$row['gender']. "</td></tr>\n";
      ?>
        </table>

    <?php } ?>

    </body>
</html>
