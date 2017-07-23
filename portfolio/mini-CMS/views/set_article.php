<?php
	$name = @htmlspecialchars($_POST['name']);
	$ingredients = @htmlspecialchars($_POST['ingredients']);
	$time = @htmlspecialchars($_POST['time']);

	if (isset($_GET['id'])) {

	if((isset($name)) && (isset($ingredients)) && (isset($time)) && (isset($_POST['submit']))) {
		$req = $bdd->prepare("UPDATE recettes SET name = :nvname , ingredients = :nvingredients, preparation_time = :nvpreparation_time WHERE id = :id");

		$nvname = $name;
		$nvingredients = $ingredients;
		$nvpreparation_time = $time;
		$submit = $_POST['submit'];

		$req->execute(array('nvname' => $nvname, 'nvingredients' => $nvingredients, 'nvpreparation_time' => $nvpreparation_time,
		 'id' => $_GET['id']));
		echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;
		</button><strong>Votre recette a été modifiée avec succès .</strong></div>';
		}
	}
	$modification = $bdd->prepare("SELECT * FROM recettes WHERE id = :id");
	$modification->execute(array('id' => $_GET['id']));