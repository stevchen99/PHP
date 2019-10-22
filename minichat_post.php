<?php
// Connexion � la base de donn�es
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ootask;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message � l'aide d'une requ�te pr�par�e
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>