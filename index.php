<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<?php

$sql="SELECT last_name, first_name FROM `datas` WHERE `last_name` = 'palmer'";

if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
else{
    ?>


    <main>
        <h2>Exercice 1</h2>
        <blockquote>Requête : Afficher tous les gens dont le nom est palmer</blockquote>
        <code>SELECT last_name, first_name FROM `datas` WHERE `last_name` = 'palmer'</code>
        <table>
            <tr><td class="coloredbg">Nom</td><td class="coloredbg">Prénom</td></tr>

            <?php
            foreach ($connexion->query($sql) as $row)
                echo "<tr><td>" .$row['last_name']. "</td><td>" . $row['first_name']."</td></tr>\n";
            ?>
        </table>

    <?php } ?>
</main>
</body>
</html>




