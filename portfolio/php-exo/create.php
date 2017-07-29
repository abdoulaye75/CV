<?php

session_start();

include("database.php");

if (isset($_SESSION['login'], $_SESSION['mdp'])) {
	echo '<a href="logout.php" class="btn btn-danger" style="margin-left: 15px; margin-top: 20px;"> Se déconnecter </a>';
}

$randonnees = $bdd->query('SELECT * FROM hiking');

if (isset($_POST['name'],$_POST['difficulty'], $_POST['distance'], $_POST['duration'], $_POST['height_difference'], $_POST['available'], $_POST['button'])) {
	$name = htmlspecialchars($_POST['name']);
	$difficulty = htmlspecialchars($_POST['difficulty']);
	$distance = htmlspecialchars($_POST['distance']);
	$duration = htmlspecialchars($_POST['duration']);
	$height_difference = htmlspecialchars($_POST['height_difference']);
	$available = htmlspecialchars($_POST['available']);
	$req = $bdd->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference, available) VALUES (?, ?, ?, ?, ?, ?)");
		
	$req->execute(array($name, $difficulty, $distance, $duration, $height_difference, $available));

	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>La randonnée a été ajoutée avec succès.</div>';
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon" type="image/jpg" href="../../img/abdoulaye.jpg">
	<link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
	<a href="read.php" class="btn btn-primary" style="margin-left: 15px; margin-top: 20px;">Liste des données</a>
	<h1 style="margin-left: 15px;">Ajouter</h1>
	<form action="" method="post" class="col-md-6">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" value="" required class="form-control">
		</div>

		<div class="form-group">
			<label for="difficulty">Difficulté</label>
			<select name="difficulty" required class="form-control">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div class="form-group">
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="" required pattern="[0,9]" class="form-control">
		</div>

		<div class="form-group">
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="" required pattern="[0,9]" class="form-control">
		</div>

		<div class="form-group">
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="" required pattern="[0,9]" class="form-control">
		</div>

		<div class="form-group">
			<label>Available</label>
			<input type="text" name="available" value="" required class="form-control">
		</div>
		<button type="submit" name="button" class="btn btn-primary">Envoyer</button>
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
