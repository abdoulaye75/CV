<?php

include '../database/database.php';
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title> Votre page membre </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="../../../img/abdoulaye.jpg">
  <link rel="icon" type="image/x-icon" href="../../../img/favicon.ico">
</head>
<body>

  <?php include 'nav.php'; ?>

    <?php

	    if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) {
			echo '<div class="alert alert-success alert-dismissable"> <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong> Connexion réussie, '.$_SESSION['name'].' ! </strong></div>';
		}
    ?>

    <ul>
    	<li> <a href="articles.php"> Consulter les articles des recettes </a> </li>
    	<li> <a href="create.php"> Créer un article de recette </a> </li>
    </ul>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>