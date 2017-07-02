let navElt = document.getElementById("myNavbar");
let iconElt = document.getElementById("hamburger_menu");

iconElt.addEventListener("click", function() {
	navElt.classList.toggle("responsive");
});