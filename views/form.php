<section id="form" class="form-container">
	<form action="index.php" method="post">
		<h1> Me contacter </h1> <h5> PS : Tous les champs sont obligatoires. Vous ne pourrez valider qu'après avoir rempli correctement tous les champs </h5>
		<label for="lastname"> Nom : </label>
		<input type="text" name="lastname" id="lastname" required>
		<span class="error" id="errorLastname"> Au moins 2 lettres </span>
		<span class="success" id="successLastname"> Nom valide </span>

		<label for="firstname"> Prénom : </label>
		<input type="text" name="firstname" id="firstname" required>
		<span class="error" id="errorFirstname"> Au moins 2 lettres </span>
		<span class="success" id="successFirstname"> Prénom valide </span>

		<label for="mail"> Adresse mail : </label>
		<input type="email" name="mail" id="mail" required>
		<span class="error" id="errorMail"> L'adresse mail doit contenir un @ et un . </span>
		<span class="success" id="successMail"> Adresse mail valide </span>

		<label for="subject"> Sujet : </label>
		<input type="text" name="subject" id="subject" required>
		<span class="error" id="errorSubject"> Sujet manquant </span>
		<span class="success" id="successSubject"> Sujet rempli </span>

		<label for="message"> Message : </label>
		<textarea name="message" id="message" required></textarea>
		<span class="error" id="errorMessage"> Message vide </span>
		<span class="success" id="successMessage"> Message rempli </span>

		<button type="submit" id="submitForm"> Envoyer </button>
		<button type="reset" id="resetForm" disabled> Tout effacer </button>
	</form>

	<?php require 'validation_server.php'; ?>
</section>