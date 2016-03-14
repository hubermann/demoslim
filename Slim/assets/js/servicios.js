var servicios = angular.module('servicios', []).config(['$httpProvider', function ($httpProvider) {
            // enable http caching
           $httpProvider.defaults.cache = true;
           
      }]);

var remote_url = "http://localhost/masisa";
var local_url = "http://localhost/slim";

servicios.controller('serviciosController', function($scope,$http){
//detalle servicio
	var idservicio = window.idservicio;
	$http.get( remote_url+"/api/servicios_detalle/"+idservicio).success(function(result){
		$scope.servicio = result;
		console.log($scope.servicio);

	});
});