$(document).ready(function() {
	let myNavbar = $("#myNavbar");
	let iconElt = $("#hamburger_menu");
	let myNavbarOffset = myNavbar.offset().top;
	let linkElt = $(".scroll");

	iconElt.click(function() {
		myNavbar.toggleClass("responsive");
	});

	// la barre de navigation statique au scroll
	$(document).on("scroll", function() {
		if (myNavbarOffset < $(document).scrollTop()) {
			myNavbar.attr("style", "position: fixed !important; z-index: 100; top: 0%; background-color: #000; width: 100%; transition: 1s");
		} else {
			myNavbar.attr("style", "position: relative !important");
		}
	});

	// au clic d'un lien, l'effet scrollspy
	linkElt.on("click", function() {
		let section = $(this).attr("href");
		$("html, body").animate({scrollTop: $(section).offset().top - 70}, 750);
		return false;
	});

	
	// le bouton pour remonter tout en haut immédiatement
	let arrowUp = $("#arrowUp");
	
	ScrollToTop = function() {
		let scroll = $(window).scrollTop(); // c'est la hauteur de la barre de défilement du navigateur
		if (scroll > 400) { /* si la hauteur de la barre de défilement est supérieur à 400 pixels, le bouton apparaît.
								Sinon le bouton disparaît */
			arrowUp.fadeIn();
		}
		else {
			arrowUp.fadeOut();
		}

		arrowUp.click(function() {
			$("html, body").animate({scrollTop : 0}, 500);
			return false;
		});
	}
	

	StopAnimation = function() {
		$("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup", function() {
			$("html, body").stop();
		});
	}

	$(window).scroll(function() {
		ScrollToTop();
		StopAnimation();
	});
});

