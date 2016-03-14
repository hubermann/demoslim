<!DOCTYPE html>
<html lang="en">
  <?php include_once('includes_front/headers.php'); ?>
<body id="novedades_detalle" ng-app="masisaApp">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container" ng-controller="novedadesController">

<script>
	window.idnovedad = "<?php echo $idnovedad; ?>";
</script>

<?php include_once('includes_front/menu_dos.php'); ?>


<div class="row">
	<div class="col-lg-12">
	<img ng-src="{{remote_url}}/images-novedades/{{novedad.filename}}" alt="{{novedad.detalle}}" class="col-lg-12 img-responsive">
	
			<div class="caption post-content">
				<h3>{{novedad.titulo}}</h3>
				<p> <i class="fa fa-clock-o"></i> {{novedad.fecha}}</p>
			</div>
		

	</div>
	<div class="col-lg-12">
	<br>
	<p ng-bind-html="novedad.descripcion | unsafe"></p>
	</div>
</div>

<div class="row" id="contenido_novedad">
	
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