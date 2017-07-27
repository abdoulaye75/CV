<?php

if (isset($_GET['name'])) {
	if (isset($_POST['submit'])) {
		$deleteUser = $bdd->prepare("DELETE FROM users WHERE name = :name");
		$deleteUser->execute(array('name' => $_GET['name']));
    $_SESSION = array();
    session_destroy();
		header("Location: index.php");
	}
}