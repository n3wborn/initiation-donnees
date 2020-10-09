# INITIATION AUX DONNÉES

Projet initiation aux données 3 jours

Avant de commencer, **récupérer le jeu de données** en pièce jointe.
Une fois ce fichier récupéré le **mettre en place sur une base de données en local** à partir de PhpMyAdmin ou Workbench (Wamp, Xamp ou Lamp).


## OBJECTIFS

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


## Notes perso sur Docker

Au depart, je lançais un container [php-apache](https://hub.docker.com/r/webdevops/php-apache), [mariadb](https://hub.docker.com/_/mariadb) et pour finir, [phpmyadmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin).

La methode etant "simple" quand on debut avec Docker, mais loin d'être optimale, on a vite meilleur temps d'utiliser [docker-compose](https://docs.docker.com/compose/) et se faire un [docker-compose.yml](https://docs.docker.com/compose/compose-file/).

Pour l'utiliser, depuis le repertoire courant du projet :

```bash
docker-compose up
```

Ensuite, dans l'interface de phpmyadmin (localhost:8081 comme indiqué dans ledit fichier), on créé une nouvelle base de données qu'on nommera **initiation-donnees**.

Une fois créée, et va lui faire importer le dump sql mis a disposition dans ce repo (bdd.sql) et le tour est joué. 

Vu qu'on utilise des [volumes](https://docs.docker.com/storage/volumes/) pour mariadb et phpmyadmin, toutes les données modifiées en base de données seront sauvegardées.
Il en sera ainsi jusqu' au moment où vous déciderez de [supprimer les volumes](https://docs.docker.com/storage/volumes/#remove-anonymous-volumes)
