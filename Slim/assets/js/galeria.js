var galeria = angular.module('galeria', []).config(['$httpProvider', function ($httpProvider) {
            // enable http caching
           $httpProvider.defaults.cache = true;
           
      }]);

var remote_url = "http://localhost/masisa";
var local_url = "http://localhost/slim";

galeria.controller('galeriaController', function($scope,$http){
	//servicios
	$scope.imagenes = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/api/galeria").success(function(result){
		$scope.imagenes = result;
		console.log($scope.imagenes);

	});
});


