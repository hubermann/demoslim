var masisaApp = angular.module('masisaApp', []).config(['$httpProvider', function ($httpProvider) {
    // enable http caching
   $httpProvider.defaults.cache = true;
   

}]);

//RUTAS REMOTA Y LOCAL
var remote_url = "http://e-roy.com/sharing/masisa";
//var remote_url = "http://localhost/masisa";
var local_url = "http://madererapinar.com.ar";


//controlador de la pagina de incio
masisaApp.controller('inicioController', function($scope,$http){
	//servicios
	$scope.servicios = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/api/servicios_inicio").success(function(result){
		$scope.servicios = result;
		//console.log($scope.servicios);

	});


	//productos
	$scope.productos = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/api/productos_inicio").success(function(result){
		$scope.productos = result;
		//console.log($scope.productos);

	});

	//grupo productos
	$scope.grupo_productos = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/api/grupo_productos_inicio").success(function(result){
		$scope.grupo_productos = result;
		//console.log($scope.grupo_productos);

	});

	//novedades
	$scope.novedades = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/api/novedades_inicio").success(function(result){
		$scope.novedades = result;
		//console.log($scope.novedades);

	});

	//galeria
	$scope.imagenes = [];
	$scope.remote_url =remote_url;
	$scope.local_url =local_url;

	$http.get( remote_url+"/api/galeria").success(function(result){
		$scope.imagenes = result;
		//console.log($scope.imagenes);

	});

	
});

	//controlador de la galeria.php
	masisaApp.controller('galeriaController', function($scope,$http){

		$scope.imagenes = [];
		$scope.remote_url =remote_url;
		$scope.local_url =local_url;

		$http.get( remote_url+"/api/galeria").success(function(result){
			$scope.imagenes = result;
			//console.log($scope.imagenes);

		});

	});

	//controlador de los menues del footer
	masisaApp.controller('footerController', function($scope,$http){
		$scope.footer_productos = [];
		$scope.remote_url =remote_url;
		$scope.local_url =local_url;

		$http.get( remote_url+"/api/footer_productos").success(function(result){
			$scope.footer_productos = result;
			//console.log($scope.footer_productos);

		});

		$scope.footer_servicios = [];
		$scope.remote_url =remote_url;
		$scope.local_url =local_url;

		$http.get( remote_url+"/api/footer_servicios").success(function(result){
			$scope.footer_servicios = result;
			//console.log($scope.footer_servicios);

		});

	});

	//controlador de la servicio_detalle.php
	masisaApp.controller('serviciosController', function($scope,$http){
		//todos los servicios

		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/servicios/").success(function(result){
			$scope.servicios = result;
			//console.log($scope.servicios);

		});

		//detalle servicio
		var idservicio = window.idservicio;
		console.log(idservicio);
		$http.get( remote_url+"/api/servicios_detalle/"+idservicio).success(function(result){
			$scope.servicio = result;
			//console.log($scope.servicio);

		});
	});

	//controlador de grupo_producto_detalle.php
	masisaApp.controller('productosController', function($scope,$http){
		//detalle producto
		var idproducto = window.idproducto;
		console.log(idproducto);
		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/producto-detalle/"+idproducto).success(function(result){
			$scope.producto = result;
			//console.log($scope.producto);

		});


	});

	//controlador de grupo_producto_detalle.php
	masisaApp.controller('grupoproductosController', function($scope,$http){

		//grupo de productos
		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/grupo-de-productos/").success(function(result){
			$scope.productos = result;
			//console.log($scope.productos);
		});

	});

	//controlador de grupo_producto_detalle.php
	masisaApp.controller('laempresaController', function($scope,$http){

		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/la-empresa").success(function(result){
			$scope.laempresa = result;
			//console.log($scope.laempresa);

		});

	});

	//controlador de sobre_placentro.php
	masisaApp.controller('sobre_placacentroController', function($scope,$http){

		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/sobre-placacentro").success(function(result){
			$scope.sobre_placacentro = result;
			//console.log($scope.sobre_placacentro);

		});

	});

	//controlador de masisa inspira.php
	masisaApp.controller('masisaInspiraController', function($scope,$http){

		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/masisa_inspira").success(function(result){
			$scope.masisaInspira = result;
			console.log($scope.masisaInspira);

		});

	});

	//controlador de masisa inspira.php
	masisaApp.controller('redMasisaController', function($scope,$http){

		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/red_masisa").success(function(result){
			$scope.redMasisa = result;
			console.log($scope.redMasisa);

		});

	});

	//controlador de sucursales.php
	masisaApp.controller('sucursalesController', function($scope,$http){

		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/sucursales").success(function(result){
			$scope.sucursales = result;
			//console.log($scope.sucursales);

		});

	});

	//controlador de sucursales.php
	masisaApp.controller('capacitacionesController', function($scope,$http){

		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		var fecha = window.fecha;

		

		$http.get( remote_url+"/api/capacitaciones/"+fecha).success(function(result){
			$scope.capacitaciones = result;
			//console.log($scope.capacitaciones);

		});

	});

		//controlador de la novedad_detalle.php
	masisaApp.controller('novedadesController', function($scope,$http){
		//todos los novedades

		$scope.remote_url =remote_url;
		$scope.local_url =local_url;
		$http.get( remote_url+"/api/novedades").success(function(result){
			$scope.novedades = result;
			//console.log($scope.novedades);

		});

		//detalle novedad
		var idnovedad = window.idnovedad;
		console.log(idnovedad);
		$http.get( remote_url+"/api/novedad_detalle/"+idnovedad).success(function(result){
			$scope.novedad = result;
			//console.log($scope.novedad);

		});
	});



	masisaApp.filter('unsafe', function($sce) { return $sce.trustAsHtml; });

