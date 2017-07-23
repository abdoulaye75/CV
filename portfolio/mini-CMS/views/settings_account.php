<?php

session_start();

include("../database/database.php");

	$name = htmlspecialchars($_POST['name']);
	$password = htmlspecialchars($_POST['password']);

	if (isset($_GET['name'])) {

	if(isset($name, $password, $_POST['submit'])) {
		$req = $bdd->prepare("UPDATE users SET name = :nvname , password = :nvpassword WHERE name = :name");

		$nvname = $name;
		$nvpassword = $password;

		$req->execute(array('nvname' => $nvname, 'nvpassword' => $nvpassword, 'name' => $_GET['name']));
		echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;
		</button><strong>Vos identifiants ont été modifiés avec succès .</strong></div>';
		}
	}
	$modification = $bdd->prepare("SELECT * FROM users WHERE name = :name");
	$modification->execute(array('name' => $_GET['name']));
?>