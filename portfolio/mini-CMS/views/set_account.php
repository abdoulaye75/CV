<?php

session_start();

include("../database/database.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Modifier mes identifiants </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <?php include 'settings_account.php'; ?>

    <form action="" method="post" class="col-md-6">
		<div class="form-group">
			<label for="name"> Identifiant : </label>
      <input required type="text" class="form-control" name="name" id="name">
		</div>

		<div class="form-group">
			<label for="password"> Mot de passe : </label>
			<input required type="password" class="form-control" name="password" id="password">
		</div>
		<button type="submit" name="submit" class="btn btn-primary"> Modifier mes identifiants </button>
	</form>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>