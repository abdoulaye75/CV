let app = angular.module("myBooks", []);

app.controller("bookCtrl", ['$scope', function($scope) {
	$scope.books = [
		{
			backgroundCover: "img/boule_de_suif.jpg",
			title: "Boule de Suif",
			author: "Guy de Maupassant",
			year: 1880,
			price: 2.30
		},

		{
			backgroundCover: "img/dom_juan.jpg",
			title: "Dom Juan",
			author: "Molière",
			year: 1665,
			price: 2.30
		},

		{
			backgroundCover: "img/tartuffe.jpg",
			title: "Tartuffe",
			author: "Molière",
			year: 1669,
			price: 2.00
		},

		{
			backgroundCover: "img/les_liaisons_dangereuses.jpeg",
			title: "Les Liaisons Dangereuses",
			author: "Pierre Choderlos de Laclos",
			year: 1782,
			price: 4.80
		},

		{
			backgroundCover: "img/rhinoceros.jpg",
			title: "Rhinocéros",
			author: "Ionesco",
			year: 1960,
			price: 7.20
		},

		{
			backgroundCover: "img/dbz.jpg",
			title: "Dragon Ball Z tome 42",
			author: "Akira Toriyama",
			year: 1989,
			price: 6.90
		},

		{
			backgroundCover: "img/tintin.jpg",
			title: "Tintin et les Picaros",
			author: "Hergé",
			year: 1976,
			price: 6.95
		},

		{
			backgroundCover: "img/les_trois_souhaits.jpg",
			title: "Les trois Souhaits",
			author: "Frères Grimm",
			year: 1815,
			price: 3.00
		},

		{
			backgroundCover: "img/la_cigale_et_la_fourmi.jpg",
			title: "La Cigale et la Fourmi",
			author: "Jean de La Fontaine",
			year: 1668,
			price: 2.50
		},

		{
			backgroundCover: "img/le_corbeau_et_le_renard.jpg",
			title: "Le Corbeau et le Renard",
			author: "Jean de La Fontaine",
			year: 1668,
			price: 2.50
		},

		{
			backgroundCover: "img/le_lion_et_le_moucheron.jpg",
			title: "Le Lion et le Moucheron",
			author: "Jean de La Fontaine",
			year: 1668,
			price: 2.50
		},

		{
			backgroundCover: "img/madame_bovary.jpg",
			title: "Madame Bovary",
			author: "Gustave Flaubert",
			year: 1857,
			price: 2.00
		}
	];

}]);