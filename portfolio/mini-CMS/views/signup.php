<?php
	include '../database/database.php';
	session_start();

	$newuser = $bdd->prepare("INSERT INTO users (name, password) VALUES (:name, :password)");

	if (isset($_POST['username'], $_POST['password'], $_POST['subscribe'])) {
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
		$_SESSION['name'] = $username;
		$_SESSION['password'] = $password;

		$newuser->execute(array('name' => $username, 'password' => $password));

		header("Location: page_membre.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> S'inscrire </title>
	<link rel="stylesheet" type="text/css" href="../CSS/signup.css">
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="../../../img/abdoulaye.jpg">
  <link rel="icon" type="image/x-icon" href="../../../img/favicon.ico">
</head>
<body>

	<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php"> Accueil</a></li>            
            <li><a href="articles.php"> Liste des articles </a></li>
            <li><a href="recettes.php"> Fiches recette </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"> S'inscrire </a></li>
            <li><a href="signin.php"> se connecter </a></li>
          </ul>
        </div>
      </div>
    </nav>

	<div class="conteneur">
		<h1 class="text-center"> S'inscrire </h1>
		<form action="" method="post">
			<div class="form-group">
				<label for="username"> Identifiant : </label>
				<input type="text" name="username" required id="username" class="form-control">
			</div>

			<div class="form-group">
				<label for="password"> Mot de passe : </label>
				<input type="password" name="password" required id="password" class="form-control">
			</div>
			<button type="submit" name="subscribe"> S'inscrire </button>
		</form>
	</div>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
