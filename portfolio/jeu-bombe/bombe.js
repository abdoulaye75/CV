let score = 0;
let x = document.getElementById("button-to-catch");
let nbPoints = document.getElementById("score");

x.addEventListener("click", function() { // une fonction qui, au clic du bouton, fait déplacer le bouton ailleurs
x.style.left = Math.floor((Math.random()*450) + 1) + "px"; /* Pour cela, utiliser la propriété style
suivie d'une propriété css. Ensuite utiliser la fonction Math.floor(Math.random()) pour générer un nombre entier aléatoire
entre 1 et 450 pour la hauteur et la largeur*/
x.style.top = Math.floor((Math.random()*450) + 1) + "px";
nbPoints.innerHTML = score += 10; // on rajoute 10 points à chaque clic dans le temps imparti
});

x.addEventListener("animationend", function() { // le message de défaite à la fin de l'animation
		alert("Trop lent !");
});

function replay() {
	document.querySelector(".button").className = "button"; // on réinitialise la liste des classes avec button
	window.requestAnimationFrame(function(time) { // on recalcule les styles css
		window.requestAnimationFrame(function(time) { /* on rappelle cette fonction qui se lance
			avant le prochain rafraîchissement */
			document.querySelector(".button").className = "button resetAnimation"; /* on ajoute la classe
			resetAnimation (déclarée dans le fichier css) au button pour que l'animation soit lancée au rafraîchissement */
		});
	});
}

document.querySelector(".button").addEventListener("click", replay, false);