<?php

include 'database/database.php';
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Fiches recette </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <?php include 'nav.php'; ?>

    <ul>
    	<li> <a href="crepe.php"> Fiche crêpe </a> </li>
    	<li> <a href="gateau.php"> Gâteau au chocolat </a> </li>
    	<li> <a href="madeleine.php"> Madeleine </a> </li>
    	<li> <a href="pommesdeterre.php"> Purée de pommes de terre </a> </li>
    	<li> <a href="potaufeu.php"> Pot au feu </a> </li>
    </ul>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>