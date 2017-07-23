let nbSecondes = 30;
let start = document.getElementById("start");
let timer = document.getElementById("minuteur");

start.addEventListener("click", function() {
	let minuteur = setInterval(function() {
		if (nbSecondes === 0) {
			clearInterval(minuteur);
		} else {
			nbSecondes--;
			timer.textContent = nbSecondes;
			start.disabled = true;
			start.style.cursor = "auto";
		}
	}, 1000);
});