$(document).ready(function() {
	let profile = $("#profile");
	let cv = $("#cv");
	let timeline = $("#timeline")
	let degree = $("#degree");
	let hobbies = $(".hobbies");
	let portfolio = $("#portfolio");
	let form = $("#form");
	let html = $("#html");
	let css = $("#css");
	let js = $("#js");
	let php = $("#php");
	let git = $("#git");
	let bootstrap = $("#bootstrap");
	let sass = $("#sass");
	let jquery = $("#jquery");
	let angularjs = $("#angularjs");
	let sql = $("#sql");


	/* l'animation au scroll des éléments html. La variable on_scroll pour la visibilité,
	increaseSkill pour les barres de progression animées. On appelle ensuite ces fonctions dans un événement au scroll
	et on les appelle simplement pour qu'elles s'exécutent */
	function onScrollevent(element, more_offset = 0) {
		let on_scroll = function() {
			if ($(window).scrollTop() > element.offset().top - more_offset) {
				element.animate({opacity: 1}, 700);
			}
		}

		let increaseSkill =	function() {
			if ($(window).scrollTop() > cv.offset().top - more_offset) {
				html.addClass("level90");
				css.addClass("level85");
				js.addClass("level75");
				php.addClass("level60");
				git.addClass("level85");
				bootstrap.addClass("level85");
				sass.addClass("level85");
				jquery.addClass("level80");
				angularjs.addClass("level70");
				sql.addClass("level60");
			}
		}

		$(window).scroll(on_scroll);
		$(window).scroll(increaseSkill);
		on_scroll;
		increaseSkill;
	}

	onScrollevent(profile, 200);
	onScrollevent(cv, 200);
	onScrollevent(timeline, 200);
	onScrollevent(degree, 200);
	onScrollevent(hobbies, 200);
	onScrollevent(portfolio, 200);
	onScrollevent(form, 200);
});