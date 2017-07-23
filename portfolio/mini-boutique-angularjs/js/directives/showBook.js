app.directive("showBook", function() {
	return {
		restrict: "E",
		scope: {
			info: "="
		},
		templateUrl: "js/directives/showBook.html"
	};
});