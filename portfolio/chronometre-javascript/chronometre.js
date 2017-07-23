let compteur = document.getElementById("compteur");
let start = document.getElementById("start");
let reset = document.getElementById("reset");
let intervalId = null;
let chronoStarted = false;

function augmenteCompteur() {
	compteur.textContent = Number(compteur.textContent) + 1;
}

start.addEventListener("click", function() {
	if (!chronoStarted) {
		intervalId = setInterval(augmenteCompteur, 1000);
		start.textContent = "Arrêter";
	} else {
		clearInterval(intervalId);
		start.textContent = "Reprendre";
	}

	chronoStarted = !chronoStarted;
});

reset.addEventListener("click", function() {
	clearInterval(intervalId);
	compteur.textContent = 0;
	start.textContent = "Démarrer";
});