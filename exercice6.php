<?php require_once "header.php"; ?>
<?php require "db-connect.php"; ?>

<main>
	<h2>Exercice 6</h2>
	<blockquote>Requête : Insérer un utilisateur, lui mettre à jour son adresse mail puis supprimer l’utilisateur</blockquote>
	<code>INSERT INTO datas (first_name, last_name, email) VALUES ('John', 'Doe', 'john.doe@maildomain.com')</code>
	<code>DELETE FROM datas WHERE first_name LIKE 'John' AND last_name LIKE 'Doe'  AND `email` LIKE 'john.doe@maildomain.com'</code>
</main>
</div>
</body>
</html>
