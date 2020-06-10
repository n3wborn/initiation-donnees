-- 0 - CREATION DE LA TABLE
CREATE TABLE IF NOT EXISTS `initiation`.`datas` (`id` int(4), `first_name` varchar(11), `last_name` varchar(10), `email` varchar(35), `gender` varchar(6), `ip_address` varchar(15), `birth_date` varchar(10), `zip_code` varchar(14), `avatar_url` varchar(84), `state_code` varchar(4), `country_code` varchar(2)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci

-- 1 - Afficher tous les gens dont le nom est palmer
SELECT * FROM `datas` WHERE `last_name` = 'palmer'

-- 2 - Afficher toutes les femmes
SELECT * FROM `datas` WHERE `gender` = 'Female'

-- 3 - Tous les etats dont la lettre commence par N
SELECT * FROM `datas` WHERE `country_code` REGEXP '^N.$'

-- 4 -  Tous les emails qui contiennent google
SELECT * FROM `datas` WHERE `email` REGEXP '.?google.?'

-- 5 -  Répartition par Etat et le nombre d’enregistrement par état (croissant)
SELECT country_code, COUNT(country_code) FROM datas GROUP BY country_code ORDER BY 2 ASC

-- 6 -  Insérer un utilisateur, lui mettre à jour son adresse mail puis supprimer l’utilisateur
INSERT INTO datas (first_name, last_name, email) VALUES ('John', 'Doe', 'john.doe@maildomain.com')
DELETE FROM datas WHERE first_name LIKE 'John' AND last_name LIKE 'Doe'  AND `email` LIKE 'john.doe@maildomain.com'

-- 7 -  Nombre de femme et d’homme
SELECT COUNT(*) FROM datas WHERE `gender` LIKE 'Female'
SELECT COUNT(*) FROM datas WHERE `gender` LIKE 'Male'

--  8 - Afficher l'âge de chaque personne, puis la moyenne d’âge générale, celle des femmes puis celle des hommes.
-- Date de naissance :
-- SELECT last_name, first_name, STR_TO_DATE(`birth_date`,'%d/%m/%Y') FROM datas ORDER BY 3
-- Age
SELECT first_name, last_name, TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE()) FROM datas
-- moyenne
SELECT AVG(TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE())) FROM datas
-- moyenne femmes / hommes
SELECT gender, AVG(TIMESTAMPDIFF(YEAR, STR_TO_DATE(`birth_date`,'%d/%m/%Y'), CURDATE())) FROM datas GROUP BY gender

-- 9 - Creation de la table des apprenants d' ACS
USE initiation;
CREATE TABLE apprenants (
  ID INT(9) NOT NULL AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  departement INT(3) NOT NULL,
  PRIMARY KEY (ID)
);

-- 9 - Insertion des données dans la tables apprenants
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

-- 9 - Afficher le nom de chaque apprenant avec son nom et son departement de residence
-- (j' ai utilisé ORDER BY sur les resultats pour trier les noms par ordre alphabetique)
SELECT
apprenants.nom,
departement.departement_code,
departement.departement_nom
FROM apprenants
INNER JOIN departement
WHERE apprenants.departement = departement.departement_code
ORDER BY `apprenants`.`nom` ASC;

