var app = angular.module("FloresDupontApp",["ngRoute","ngResource"]);

app.config(function($routeProvider){
	$routeProvider
	.when('/propiedades',{templateUrl:'../assets/js/app/templates/properties/properties.html'})
	.when('/propiedades/nueva-propiedad',{templateUrl:'../assets/js/app/templates/properties/propertyForm.html'})
	.when('/dashboard',{templateUrl:'../assets/js/app/templates/dashboard.html'})
	.otherwise('/dashboard',{templateUrl:'../assets/js/app/templates/dashboard.html'})
});
