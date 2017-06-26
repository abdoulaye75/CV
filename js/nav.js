let navElt = document.getElementById("myNavbar");
let iconElt = document.getElementById("hamburger_menu");

iconElt.addEventListener("click", function() {
	if (navElt.className === "navbar") {
		navElt.className += " responsive";
	} else {
		navElt.className = "navbar";
	}
});