<?php

include("database.php");
session_start();

$newuser = $bdd->prepare("INSERT INTO users (login, mdp) VALUES (:login, :mdp)");


// si l'utilisateur renseigne les champs et valide le formulaire, il est inscrit à la base de données
if (isset($_POST['username'], $_POST['password'], $_POST['button'])) {
	$username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $_SESSION['login'] = $username;
	$_SESSION['mdp'] = $password;

	$newuser->execute(array('login' => $username, 'mdp' => $password));

	header("Location: page_membre.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> S'inscrire </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="../../img/abdoulaye.jpg">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
	<a href="index.php" class="btn btn-primary"> Retour à l'accueil </a>
  <form action="" method="post" class="col-md-6">
		<div class="form-group">
        <label for="username">Identifiant :</label>
        <input type="text" name="username" required class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Mot de passe : </label>
        <input type="password" name="password" required class="form-control">
      </div>
      <div>
        <button type="submit" name="button" class="btn btn-primary">S'inscrire</button>
      </div>
	</form>
</body>
</html>