<?php

include ("database.php");
session_start();

// si l'utilisateur est connecté, on l'accueille avec un message de salutation personnalisée
if ((isset($_SESSION['login'])) && (isset($_SESSION['mdp']))) {
	echo "<h1> Bienvenue dans votre page membre, " .$_SESSION['login']. "! </h1>";
	echo '<a href="logout.php"> Se déconnecter </a>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Votre page membre </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<ul>
		<li> <a href="read.php" class="btn btn-primary"> Liste des randonnées </a> </li>
		<li> <a href="create.php" class="btn btn-primary"> Ajouter une nouvelle randonnée </a> </li>
	</ul>
</body>
</html>