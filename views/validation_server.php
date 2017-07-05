<?php

$to = "abdoulayedabo@laposte.net";

if (isset($_POST['lastname'], $_POST['firstname'], $_POST['mail'], $_POST['subject'], $_POST['message'], $_POST['submit'])) {
	$lastname = htmlspecialchars($_POST['lastname']);
	$firstname = htmlspecialchars($_POST['firstname']);
	$mail = htmlspecialchars($_POST['mail']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);

	if (mail($to, $subject, $message)) {
		echo '<div class="alert successful">
		<span class="btnclose"> &times; </span>
		<strong> Votre mail a bien été envoyé ! </strong>
		</div>';
	} else {
		echo '<div class="alert fail">
		<span class="btnclose"> &times; </span>
		<strong> Votre mail n\'a pas pu être envoyé ! </strong>
		</div>';
	}
}


?>