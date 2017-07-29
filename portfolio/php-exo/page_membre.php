<?php

include ("database.php");
session_start();

// si l'utilisateur est connecté, on l'accueille avec un message de salutation personnalisée
if (isset($_SESSION['login'], $_SESSION['mdp'])) {
	echo "<h1> Bienvenue dans votre page membre, " .$_SESSION['login']. "! </h1>";
	echo '<a href="logout.php" class="btn btn-danger"> Se déconnecter </a>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Votre page membre </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon" type="image/jpg" href="../../img/abdoulaye.jpg">
	<link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
	<a href="read.php" class="btn btn-primary"> Liste des randonnées </a>
	<a href="create.php" class="btn btn-primary"> Ajouter une nouvelle randonnée </a>
</body>
</html>