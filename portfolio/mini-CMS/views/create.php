<?php

session_start();

include '../database/database.php';

?>

<!DOCTYPE html>
<html ng-app="myApp" ng-controller="myCtrl">
<head>
	<meta charset="utf-8">
	<title> Ajouter une recette </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <?php include 'nav.php'; ?>

<?php
		$recette = $bdd->query("SELECT * FROM recettes");

		$name = htmlspecialchars($_POST['name']);
		$ingredients = htmlspecialchars($_POST['ingredients']);
		$time = htmlspecialchars($_POST['time']);
		$submit = $_POST['submit'];

		if (isset($name) && isset($ingredients) && isset($time) && isset($submit)) {
		$req = $bdd->prepare("INSERT INTO recettes (name, ingredients, preparation_time) VALUES (?, ?, ?)");

		$req->execute(array($name, $ingredients, $time));

		echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;
			</button>La recette a été ajoutée avec succès</div>';
	}

  ?>
	<form action="" method="post" class="col-md-6">
    <div class="form-group">
  		<label for="name"> Nom de la recette : </label>
      <input type="text" name="name" id="name" class="form-control" ng-model="name" required>
    </div>

		<div class="form-group">
      <label for="ingredients"> Ingrédients : </label>
      <textarea required type="text" name="ingredients" id="ingredients" class="form-control" ng-model="ingredients"></textarea>
    </div>

		<div class="form-group">
      <label for="time"> Temps de préparation : </label>
      <input required type="duration" name="time" id="time" class="form-control" placeholder="ex: 01:00:00 pour 1 heure" ng-model="time">
    </div>

		<button type="submit" name="submit" class="btn btn-primary"> Ajouter cette nouvelle recette </button>
	</form>

  <section>
    <h1> Votre saisie : </h1>
    <p> Nom de la recette : {{name}} </p>
    <p> Ingrédients : {{ingredients}} </p>
    <p> Temps de préparation : {{time}} </p>
  </section>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="../js/app.js"></script>
</html>