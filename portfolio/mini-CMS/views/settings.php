<?php

session_start();

include("../database/database.php");

$user_is_connected = isset($_SESSION['name'], $_SESSION['password']);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Paramètres de mon compte </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/nav.css">
</head>
<body>

  <?php include 'nav.php'; ?>
  <?php include 'set_account.php'; ?>
  <?php echo '<a href="unsubscribe.php?name='.$_SESSION['name'].'" class="btn btn-danger"> Supprimer mon compte </a>'; ?>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>