<?php

include 'database/database.php';
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crêpe</title>
    <link rel="stylesheet" type="text/css" href="../CSS/crepe.css">
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
  </head>
  <body>

  <?php include 'nav.php'; ?>

    
    <p>Les ingrédients pour préparer une crêpe sont !</p>
    <p>La farine , les oeufs, le lait, et du sucre vanillé</p>
    <img src="../img/crepe.jpeg" alt="crêpe">

  	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
