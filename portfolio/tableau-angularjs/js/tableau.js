let app = angular.module("myTable", []);

app.controller('tableCtrl', ['$scope', function($scope) {
	var cars = [
		{year: 2004,
		 brand: 'Peugeot',
		 model: 206
		},

		{year: 2003,
		 brand: 'Renault',
		  model: 'Clio'
		},

		{year: 2009,
		 brand: 'Toyota',
		  model: 'Auris'
		},

		{year: 2004,
		 brand: 'Ford',
		  model: 'Mondeo'
		},

		{year: 2005,
		 brand: 'Mercedes',
		  model: 'Classe E'
		},

		{year: 2007,
		 brand: 'Volswagen',
		  model: 'Polo IV'
		},

		{year: 2005,
		 brand: 'Opel',
		  model: 'Corsa'
		},

		{year: 2003,
		 brand: 'Citroën',
		  model: 'Xsara'
		},

		{year: 2010,
		 brand: 'Dacia',
		  model: 'Sandero'
		},

		{year: 2010,
		 brand: 'Fiat',
		  model: 'Grande Punto'
		}
	];

	$scope.propertyName = "year";
	$scope.reverse = true;
	$scope.cars = cars;

	$scope.sortBy = function(propertyName) {
		$scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
		$scope.propertyName = propertyName;
	};

	$scope.reverse = function(propertyName) {
		$scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : true;
		$scope.propertyName = propertyName;
	};
}]);