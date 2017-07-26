<?php

session_start();

include("../database/database.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Modifier une recette </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="../../../img/abdoulaye.jpg">
  <link rel="icon" type="image/x-icon" href="../../../img/favicon.ico">
</head>
<body>

  <?php include 'nav.php'; ?>
  <?php include 'set_article.php'; ?>
  
	<form action="" method="post" class="col-md-6">
	<?php while ($field = $modification->fetch()) { ?>
		<div class="form-group">
			<label for="name"> Nom de la recette : </label>
      <input required type="text" class="form-control" name="name" id="name" value="<?php echo $field['name'] ?>">
		</div>

		<div class="form-group">
			<label for="ingredients"> Ingrédients : </label>
			<textarea required type="text" class="form-control" name="ingredients" id="ingredients"><?php echo $field['ingredients'] ?></textarea>
		</div>

		<div class="form-group">
			<label for="time"> Temps de préparation (en minutes) : </label>
			<input required type="text" class="form-control" name="time" id="time" value="<?php echo $field['preparation_time'] ?>">
		</div>
		<?php } $modification->closeCursor(); ?>

		<button type="submit" name="submit" class="btn btn-primary"> Modifier cette recette </button>
	</form>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>