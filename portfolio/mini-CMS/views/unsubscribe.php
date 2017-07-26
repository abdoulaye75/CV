<?php

include '../database/database.php';
session_start();
include 'delete_account.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Supprimer mon compte </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="../../../img/abdoulaye.jpg">
  <link rel="icon" type="image/x-icon" href="../../../img/favicon.ico">
</head>
<body>

  <?php include 'nav.php'; ?>

    <h1 class="text-center"> Etes-vous sûr de vouloir supprimer votre compte ? Cette opération est irréversible </h1>

    <form action="" method="post">
    	<button type="submit" name="submit" class="btn btn-danger"> Supprimer mon compte définitivement </button>
    </form>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>