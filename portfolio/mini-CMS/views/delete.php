<?php

session_start();
include '../database/database.php';

if (isset($_GET['id'])) {
	$delete = $bdd->prepare("DELETE FROM recettes WHERE id = :id");
	$delete->execute(array('id' => $_GET['id']));
	echo "La recette a bien été supprimé";
}

header("Location: http://localhost/mini-CMS/views/articles.php")


?>