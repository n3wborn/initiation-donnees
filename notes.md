#INITIATION AUX DONNÉES

Projet initiation aux données 3 jours

Avant de commencer, **récupérer le jeu de données** en pièce jointe.
Une fois ce fichier récupéré le **mettre en place sur une base de données en local** à partir de PhpMyAdmin ou Workbench (Wamp, Xamp ou Lamp).


##OBJECTIFS

Résoudre les problèmes **en utilisant uniquement du SQL** :

1. Afficher tous les gens dont le nom est palmer.

2. Afficher toutes les femmes.

3. Tous les états dont la lettre commence par N.

4. Tous les emails qui contiennent google.

5. Répartition par Etat et le nombre d’enregistrement par état (croissant).

6. Insérer un utilisateur, lui mettre à jour son adresse mail puis supprimer l’utilisateur.

7. Nombre de femme et d’homme.

8. Afficher l'âge de chaque personne, puis la moyenne d’âge générale, celle des femmes puis celle des hommes.

9. Créer deux nouvelles tables, une qui contient l’ensemble des membres de l’ACS, l’autre qui contient les département avec numéros et nom écrit.
Afficher le nom de chaque apprenant avec son département de résidence.

10. Afficher le résultat du 9) dans une page php (utiliser PDO pour la connexion).

11. Exporter votre code sur votre espace perso en utilisant PhpMyadmin et un client FTP.

## Docker containers pour l'exercice

    docker run --name mysql -e MYSQL_ROOT_PASSWORD=mysql -d mysql

    docker run --rm --link mysql:mysql -p 8080:80 nazarpc/phpmyadmin
