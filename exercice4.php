<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

    $sql="SELECT first_name, last_name, email FROM `datas` WHERE `email` REGEXP '.?google.?'";

    if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
    else{
?>



        <h2>Exercice 4</h2>
        <blockquote>Requête : Afficher tous les emails qui contiennent google</blockquote>
        <code>SELECT first_name, last_name, email FROM `datas` WHERE `email` REGEXP '.?google.?'</code>
        <table>
            <tr>
                <td class="coloredbg">Prénom</td>
                <td class="coloredbg">Nom</td>
                <td class="coloredbg">Email</td>
            </tr>

      <?php
        foreach ($connexion->query($sql) as $row)
            echo "<tr><td>" .$row['first_name']. "</td><td>" . $row['last_name']."</td><td>" .$row['email']. "</td></tr>\n";
      ?>
        </table>

    <?php } ?>

    </body>
</html>
