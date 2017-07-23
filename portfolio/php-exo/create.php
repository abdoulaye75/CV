<?php

session_start();

include("database.php");

$randonnees = $bdd->query('SELECT * FROM hiking');

$name = htmlspecialchars($_POST['name']);
$difficulty = htmlspecialchars($_POST['difficulty']);
$distance = htmlspecialchars($_POST['distance']);
$duration = htmlspecialchars($_POST['duration']);
$height_difference = htmlspecialchars($_POST['height_difference']);
$available = htmlspecialchars($_POST['available']);

if ((isset($name)) && (isset($difficulty)) && (isset($distance)) && (isset($duration)) && (isset($height_difference)) && (isset($available)) && (isset($_POST['button']))) {
	$req = $bdd->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference, available) VALUES (?, ?, ?, ?, ?, ?)");
		
	$req->execute(array($name, $difficulty, $distance, $duration, $height_difference, $available));

	echo "La randonnée a été ajoutée avec succès.";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<a href="read.php" class="btn btn-primary">Liste des données</a>
	<h1>Ajouter</h1>
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
</body>
</html>
