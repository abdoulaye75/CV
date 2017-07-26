<?php

session_start();

include("../database/database.php");

$user_is_connected = isset($_SESSION['name'], $_SESSION['password']);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Modifier mes identifiants </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/nav.css">
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
            <li> <a href="index.php"> Accueil </a> </li>
            <?php if ($user_is_connected) { ?>
                <li> <?php echo '<a href="signout.php"> Se déconnecter </a>'; ?> </li>
                <li> <?php echo '<a href="settings.php?name='.$_SESSION['name'].'"> Paramètres du compte </a>'; ?> </li>
                <?php }

      			else { ?>
      	    	  <li> <?php echo "<a href='signup.php'> S'inscrire </a>"; ?> </li>
      	        <li> <?php echo "<a href='signin.php'> se connecter </a>"; ?> </li>

      			<?php }?>
                <li> <a href="articles.php"> Liste des articles </a> </li>
                <li> <a href="recettes.php"> Fiches recette </a> </li>
            </ul>
        </div>
        
      </div>
    </nav>