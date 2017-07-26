<?php

include '../database/database.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Les articles </title>
	<link rel="stylesheet" type="text/css" href="../CSS/articles.css">
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="icon" type="image/jpg" href="../../../img/abdoulaye.jpg">
  	<link rel="icon" type="image/x-icon" href="../../../img/favicon.ico">
</head>
<body>

  <?php include 'nav.php'; ?>

    <?php

  		include '../database/database.php';

  		$reponse = $bdd->query('SELECT * FROM recettes');

  		$user_is_connected = isset($_SESSION['name'], $_SESSION['password']);

  		if ($user_is_connected) {
  			echo '<a href="create.php" class="btn btn-success">	<span class="glyphicon">&#x2b;</span> Ajouter une recette </a>';
  		}

 	?>

	<table class="table table-bordered table-striped table-responsive">
		<thead>
			<tr>
				<th> Nom du plat </th>
				<th> Ingrédients </th>
				<th> Temps de préparation (en minutes) </th>
				<?php if ($user_is_connected) { ?>
					<th> Modifier un article </th>
					<th> Supprimer un article </th>
				<?php } ?>
			</tr>
		</thead>

		<tbody>
			<?php
      
      		while ($donnees = $reponse->fetch()) { ?>
			<tr>
				<td> <?php echo '<a href="">'.$donnees['name'].'</a>'; ?> </td>
				<td> <?php echo $donnees['ingredients']; ?> </td>
				<td> <?php echo $donnees['preparation_time']; ?> </td>
				<?php if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) { ?>
				<td> <?php $modifiedrecipes = array($donnees);
			        foreach ($modifiedrecipes as $modifiedrecipe) {
			          echo '<a href="update.php?id='.$donnees['id'].'"> <i class="material-icons">edit</i> Modifier la recette </a>';
			        } ?>
		        </td>
		        <td> <?php $recipes = array($donnees);
		        foreach ($recipes as $recipe) {
		        	echo '<a href="delete.php?id='.$donnees['id'].'" style="color:red;"> <i class="material-icons">delete</i> Supprimer la recette </a>';
		        }
		        ?> </td>
		        <?php } ?>
			</tr>
			<?php 
    		} $reponse->closeCursor();
     			?>
		</tbody>
	</table>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>