<!DOCTYPE html>
<html lang="en" >
  <?php include_once('includes_front/headers.php'); ?>

<body id="servicio_detalle" ng-app="masisaApp">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container" ng-controller="serviciosController">

<?php include_once('includes_front/menu_dos.php'); ?>

<script>
	window.idservicio = "<?php echo $idservicio; ?>";
</script>

<div class="row">
	<div class="col-lg-12"><h2 class="orange">{{servicio.nombre}}</h2></div>
</div>

<div class="row">
	<div class="col-lg-8">
		
	<div class="carousel slide" data-ride="carousel" id="carrousel_detalle">
  	<!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li ng-repeat="imagen in servicio.imagenes" ng-class="{active : $first}" data-target="#carrousel_detalle" data-slide-to="{{$index}}" ></li>

	  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
	
	<div class="item" ng-repeat="imagen in servicio.imagenes" ng-class="{active : $first}">
		<img ng-src="{{remote_url}}/images-servicios/{{ imagen.filename }}" alt="..." class="responsive">
		<div class="carousel-caption">

		</div>
	</div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carrousel_detalle" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carrousel_detalle" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 

	</div><!-- end col-8 -->

	<div class="col-lg-4" id="info_sucursales" ng-controller="sucursalesController">
	
	<div class="box_sucursal" ng-repeat="sucursal in sucursales" | filter:'!\'>
		<h2 class="green">{{sucursal.nombre}} <br> <span class="orange">{{sucursal.localidad}}</span></h2>
		<p>{{sucursal.direccion }}</p>
		<p>{{sucursal.telefono }} | {{sucursal.telefono2 }}</p>
		<p>{{sucursal.email }}</p>
		<!-- <p class="small"> {{sucursal.horario }}</p> -->
		<div class="line_orange_s"></div>
	</div>


	</div><!-- end col-4 -->
</div>



</section><!-- end #main_content -->

<?php include_once('includes_front/footer.php'); ?>



</body>
<script>
	$('.carousel').carousel({
  interval: 2000
});
	
</script>
</html>