<section id="form" class="form-container">
	<form action="index.php" method="post">
		<h1> Me contacter </h1>
		<label for="lastname"> Nom : </label>
		<input type="text" name="lastname" id="lastname" required>
		<span class="error"> Au moins 2 lettres </span>
		<span class="success"> Nom valide </span>

		<label for="firstname"> Prénom : </label>
		<input type="text" name="firstname" id="firstname" required>
		<span class="error"> Au moins 2 lettres </span>
		<span class="success"> Prénom valide </span>

		<label for="mail"> Adresse mail : </label>
		<input type="email" name="mail" id="mail" required>
		<span class="error"> L'adresse mail doit contenir un @ et un . </span>
		<span class="success"> Adresse mail valide </span>

		<label for="subject"> Sujet : </label>
		<input type="text" name="subject" id="subject" required>
		<span class="error"> Sujet manquant </span>
		<span class="success"> Sujet rempli </span>

		<label for="message"> Message : </label>
		<textarea name="message" id="message" required></textarea>
		<span class="error"> Message vide </span>
		<span class="success"> Message rempli </span>

		<button type="submit" id="submitForm"> Envoyer </button>
		<button type="reset" id="resetForm"> Tout effacer </button>
	</form>
</section>