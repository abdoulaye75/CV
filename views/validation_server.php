<?php

if (isset($_POST['lastname'], $_POST['firstname'], $_POST['mail'], $_POST['subject'], $_POST['message'], $_POST['submit'])) {
	$lastname = htmlspecialchars($_POST['lastname']);
	$firstname = htmlspecialchars($_POST['firstname']);
	$mail = htmlspecialchars($_POST['mail']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);

	if (!empty($lastname) && !empty($firstname) && !empty($mail) && preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $mail) && !empty($subject) && !empty($message)) {
		$to = "abdoulayedabo@laposte.net";
		$objet = $subject.', de la part de '.$firstname.' '.$lastname;
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= 'From: Formulaire de abdoulaye-dabo.fr<formulaire@abdoulaye-dabo.fr>'."\r\n";
		$headers .= 'Content-Type:text/plain; charset="utf-8"'."\n";
		$headers .= 'Content-Transfer-Encoding: 8bit';
		$headers .= 'Reply-To:<'.$mail.'>'."\r\n";
		$headers .= 'Disposition-Notification-To:formulaire@abdoulaye-dabo.fr'."\r\n";

		$headers_confirmation = 'From: Formulaire de abdoulaye-dabo.fr<formulaire@abdoulaye-dabo.fr>'."\r\n";
		$headers_confirmation .= 'Reply-To:<'.$mail.'>'."\r\n";
		$headers_confirmation .= 'Disposition-Notification-To:formulaire@abdoulaye-dabo.fr'."\r\n";
		$message_confirmation = 'Bonjour,'."\r\n".'Votre message m\'est bien parvenu.'."\r\n".'Abdoulaye DABO';

		$envoi_mail_reussi = mail($to, $objet, $message, $headers, '-f formulaire@abdoulaye-dabo.fr');

		if ($envoi_mail_reussi) {
			echo '<div class="alert successful">
					<span class="btnclose"> &times; </span>
					<strong> Votre mail a bien été envoyé ! </strong>
				</div>';
			mail($mail, 'Accusé de réception', $message_confirmation, $headers_confirmation, '-f formulaire@abdoulaye-dabo.fr');
		} else {
			echo '<div class="alert fail">
					<span class="btnclose"> &times; </span>
					<strong> Votre mail n\'a pas pu être envoyé ! Veuillez réessayer s\'il vous plaît ! </strong>
				</div>';
		}
		
	} else {
		echo '<div class="alert fail">
				<span class="btnclose"> &times; </span>
				<strong> Tous les champs sont obligatoires ! </strong>
			</div>';
	}
}

?>