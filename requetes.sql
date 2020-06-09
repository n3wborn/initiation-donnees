-- CREATION DE LA TABLE
CREATE TABLE IF NOT EXISTS `initiation`.`datas` (`id` int(4), `first_name` varchar(11), `last_name` varchar(10), `email` varchar(35), `gender` varchar(6), `ip_address` varchar(15), `birth_date` varchar(10), `zip_code` varchar(14), `avatar_url` varchar(84), `state_code` varchar(4), `country_code` varchar(2)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci

-- Afficher tous les gens dont le nom est palmer
SELECT * FROM `datas` WHERE `last_name` = 'palmer'

-- Afficher toutes les femmes
SELECT * FROM `datas` WHERE `gender` = 'Female'

-- Tous les etats dont la lettre commence par N
SELECT * FROM `datas` WHERE `country_code` REGEXP '^N.$'

-- Tous les emails qui contiennent google
SELECT * FROM `datas` WHERE `email` REGEXP '.?google.?'

-- Répartition par Etat et le nombre d’enregistrement par état (croissant)
SELECT country_code, COUNT(country_code) FROM datas GROUP BY country_code ORDER BY 2 ASC

-- Insérer un utilisateur, lui mettre à jour son adresse mail puis supprimer l’utilisateur
INSERT INTO datas (first_name, last_name, email) VALUES ('John', 'Doe', 'john.doe@maildomain.com')
DELETE FROM datas WHERE first_name LIKE 'John' AND last_name LIKE 'Doe'  AND `email` LIKE 'john.doe@maildomain.com'

-- Nombre de femme et d’homme
SELECT COUNT(*) FROM datas WHERE `gender` LIKE 'Female'
SELECT COUNT(*) FROM datas WHERE `gender` LIKE 'Male'
