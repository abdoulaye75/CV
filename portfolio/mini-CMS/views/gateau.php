<?php

include 'database/database.php';
  session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>gateau au chocolat</title>
    <link rel="stylesheet" type="text/css" href="../CSS/gateau.css">
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="../../../img/abdoulaye.jpg">
  <link rel="icon" type="image/x-icon" href="../../../img/favicon.ico">
  </head>
  <body>

  <?php include 'nav.php'; ?>

    <p>Pour faire un gateau il faut !</p>
    <p>farine, oeufs, lait, sel, sucre vanillé, sucre en poudre</p>
    <img src="../img/cake_chocolate.jpeg" alt="gâteau au chocolat">

  	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
