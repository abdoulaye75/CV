let i = 0;
let images = ["agneau.jpg", "chat.jpg", "cheval.jpg", "dauphin.jpg", "lion.jpg", "renard.jpg", "tigre.jpg"];
let slider = document.getElementById("slider");
let numberImage = document.getElementById("number-image");

setInterval(function() {
	slider.src = "img/" + images[i];
	i++;

	let currentImage = i;
	let numberImageTotal = images.length;
	numberImage.textContent = currentImage + " / " + numberImageTotal;

	if (i === images.length) {
		i = 0;
	}
}, 2000)