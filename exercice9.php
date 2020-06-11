<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>



    <body>
        <h2>Exercice 9</h2>
        <blockquote>Requête : Créer/importer la table des apprenants de l'ACS et afficher leur departement </blockquote>

        <h3>Création de la base</h3>
        <code>
            USE initiation;
            CREATE TABLE apprenants (
                ID INT(9) NOT NULL AUTO_INCREMENT,
                nom VARCHAR(100) NOT NULL,
                prenom VARCHAR(100) NOT NULL,   
                departement INT(3) NOT NULL,
                PRIMARY KEY (ID)
            );
        </code>

        <h3>Insertion des données</h3>
        <code>
            INSERT INTO `apprenants` (prenom, nom, departement)
            VALUES
                ('Adrien','PATUROT','25'),
                ('Adrien','SCHMIDT','25'),
                ('Jessica','DA SILVA ','39'),
                ('Alexandre','VIGNEAUD','25'),
                ('Arnaud','DELCROIX','25'),
                ('Clovis','DAUBOURG','25'),
                ('Fouad','LYOUSFI','25'),
                ('Guillaume','BLONDEL','25'),
                ('Guillaume','PERBET','25'),
                ('Jérémy','MATHIEU','25'),
                ('Lisa','DEVOGHELAERE','25'),
                ('Léa','ZERVINI','25'),
                ('Sonia','HOAREAU','70'),
                ('Stéphane','PLUCHART','70'),
                ('Vanessa','KNORR','25');
        </code>
        <h3>Affichage du département de chaque apprenant</h3>
        <code>
            SELECT
                apprenants.nom AS Nom, 
                departement.departement_code AS Code,
                departement.departement_nom AS Departement
            FROM apprenants
            INNER JOIN departement
            WHERE apprenants.departement = departement.departement_code
            ORDER BY `apprenants`.`nom` ASC;            
        </code>

        <table>
            <tr>
                <td class="coloredbg">Nom</td>
                <td class="coloredbg">Code</td>
                <td class="coloredbg">Departement</td>
            </tr>
        <?php
            $sql="SELECT apprenants.nom AS Nom, departement.departement_code AS Code, departement.departement_nom AS Departement FROM apprenants INNER JOIN departement WHERE apprenants.departement = departement.departement_code ORDER BY `apprenants`.`nom` ASC; ";

            if(!$connexion->query($sql)) echo "Y a un bug dans la matrice mec";
                else{
        ?>

        <?php
            foreach ($connexion->query($sql) as $row)
                echo "<tr><td>" .$row['Nom']. "</td><td>" . $row['Code']. "</td><td>" . $row['Departement']. "</td></tr>\n";
        ?>
        </table>

    <?php } ?>

    </body>
</html>
