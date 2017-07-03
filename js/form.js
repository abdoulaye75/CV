// les champs à remplir
let lastname = document.getElementById("lastname");
let firstname = document.getElementById("firstname");
let mail = document.getElementById("mail");
let subject = document.getElementById("subject");
let message = document.getElementById("message");

// les messages d'aide à la saisie
let errorLastname = document.getElementById("errorLastname");
let successLastname = document.getElementById("successLastname");
let errorFirstname = document.getElementById("errorFirstname");
let successFirstname = document.getElementById("successFirstname");
let errorMail = document.getElementById("errorMail");
let successMail = document.getElementById("successMail");
let errorSubject = document.getElementById("errorSubject");
let successSubject = document.getElementById("successSubject");
let errorMessage = document.getElementById("errorMessage");
let successMessage = document.getElementById("successMessage");

// les boutons du formulaire
let submitForm = document.getElementById("submitForm");
let resetForm = document.getElementById("resetForm");

lastname.addEventListener("input", function(e) {
	let lastname = e.target.value;
	if (lastname.length >= 2) {
		errorLastname.style.display = "none";
		successLastname.style.display = "inherit";
	} else {
		successLastname.style.display = "none";
		errorLastname.style.display = "inherit";
	}
});

firstname.addEventListener("input", function(e) {
	let firstname = e.target.value;
	if (firstname.length >= 2) {
		errorFirstname.style.display = "none";
		successFirstname.style.display = "inherit";
	} else {
		successFirstname.style.display = "none";
		errorFirstname.style.display = "inherit";
	}
});

mail.addEventListener("input", function(e) {
	let mail = e.target.value;
	let regexMail = /.+@.+\..+/;
	if (regexMail.test(mail)) {
		errorMail.style.display = "none";
		successMail.style.display = "inherit";
	} else {
		successMail.style.display = "none";
		errorMail.style.display = "inherit";
	}
});

subject.addEventListener("input", function(e) {
	let subject = e.target.value;
	if (subject !== "") {
		errorSubject.style.display = "none";
		successSubject.style.display = "inherit";
	} else {
		successSubject.style.display = "none";
		errorSubject.style.display = "inherit";
	}
});

message.addEventListener("input", function(e) {
	let message = e.target.value;
	if (message !== "") {
		errorMessage.style.display = "none";
		successMessage.style.display = "inherit";
	} else {
		successMessage.style.display = "none";
		errorMessage.style.display = "inherit";
	}
});

if ((lastname.length >= 2) && (firstname.length >= 2) && (regexMail.test(mail)) && (subject !== "") && (message !== "")) {
	submitForm.disabled = false;
	submitForm.style.cursor = "pointer";
}

if ((lastname !== "") || (firstname !== "") || (mail !== "") || (subject !== "") || (message !== "")) {
	resetForm.disabled = false;
	resetForm.style.cursor = "pointer";
}