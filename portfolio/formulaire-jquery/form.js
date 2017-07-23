$(document).ready(function() {
	$("#background").change(function() {
		let background_color = $("#background option:selected").val();
		$("#contenu").css("background-color", background_color);
	});


	$("#color").change(function() {
		let color = $("#color option:selected").val();
		$("p").css("color", color);
	});


	$("#family").change(function() {
		let family = $("#family option:selected").val();
		if (family == "arial") {
			$("p").css("font-family", "Arial");
		}

		if (family == "tnr") {
			$("p").css("font-family", "Times New Roman");
		}

		if (family == "ssp") {
			$("p").css("font-family", "Source Sans Pro");
		}

		if (family == "raleway") {
			$("p").css("font-family", "Raleway");
		}
	});


	$("#size").change(function() {
		let size = $("#size option:selected").val();
		if (size == 12) {
			$("p").css("font-size", "12px");
		}

		if (size == 16) {
			$("p").css("font-size", "16px");
		}

		if (size == 20) {
			$("p").css("font-size", "20px");
		}

		if (size == 24) {
			$("p").css("font-size", "24px");
		}

		if (size == 30) {
			$("p").css("font-size", "30px");
		}
	});


	$("#style").change(function() {
		let style = $("#style option:selected").val();
		if (style == "normal") {
			$("#contenu").css({"font-style": "normal", "font-weight": "normal", "text-decoration": "none"});
		}

		if (style == "bold") {
			$("#contenu").css({"font-weight": "bold", "text-decoration": "none"});
		}

		if (style == "italic") {
			$("#contenu").css({"font-style": "italic", "font-weight": "normal", "text-decoration": "none"});
		}

		if (style == "underline") {
			$("#contenu").css({"text-decoration": "underline", "font-weight": "normal"});
		}

		if (style == "line-through") {
			$("#contenu").css({"text-decoration": "line-through", "font-weight": "normal"});
		}
	});


	$("#background-image").change(function() {
		let background_image = $("#background-image option:selected").val();
		if (background_image == "yes") {
			$("#contenu").css({"background-image": "url(code.jpg)", "background-repeat": "no-repeat", "background-size": "cover"});
		}

		if (background_image == "no") {
			$("#contenu").css("background", "none");
		}
	});


	$("#center").change(function() {
		let center = $("#center option:selected").val();
		if (center == "yes") {
			$("#contenu").css("text-align", "center");
		}

		if (center == "no") {
			$("#contenu").css("text-align", "left");
		}
	});


	$("button").click(function() {
		location.reload();
	});

});