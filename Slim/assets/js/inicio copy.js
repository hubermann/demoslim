var masisaApp = angular.module('masisaApp', []).config(['$httpProvider', function ($httpProvider) {
            // enable http caching
           $httpProvider.defaults.cache = true;
           
      }]);

//var remote_url = "http://e-roy.com/sharing/masisa";
var remote_url = "http://localhost/masisa";
var local_url = "http://localhost/masisa";


masisaApp.controller('inicioController', function($scope,$http){

	$scope.servicios = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/servicios_inicio").success(function(result){
		$scope.servicios = result;
		console.log($scope.servicios);

	});

	
});

//var servicio = angular.module('servicio', []);


masisaApp.controller('servicioController', function($scope,$http){
	
	$scope.servicios = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/servicios_inicio").success(function(result){
		$scope.servicios = result;
		console.log($scope.servicios);
	});
	
	var idservicio = window.idservicio;
	$http.get( remote_url+"/servicios_detalle/"+idservicio).success(function(result){
		$scope.servicio = result;
		console.log($scope.servicio);

	});

	console.log('inisde servicioController');

	
});

//controlador producto
//var producto = angular.module('producto', []);
masisaApp.controller('productoController', function($scope,$http){
	
	$scope.productos = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/productos_inicio").success(function(result){
		$scope.productos = result;
		console.log($scope.productos);

	});
	
	var idproducto = window.idproducto;
	$http.get( remote_url+"/productos_detalle/"+idproducto).success(function(result){
		$scope.producto = result;
		console.log($scope.producto);

	});

	console.log('inisde producto Controller');

	
});