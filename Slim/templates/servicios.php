<!DOCTYPE html>
<html lang="en" ng-app="masisaApp">
  <?php include_once('includes_front/headers.php'); ?>
<body id="servicios" ng-controller="serviciosController">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container">


<?php include_once('includes_front/menu_dos.php'); ?>



<div class="row"><!-- imagen cabecera -->
	<div class="col-lg-12">
		<div class="headerTitle">
		<img src="http://www.e-roy.com/sharing/masisa/images-slider_servicios/servicios_header.jpg" alt="img" class="img-responsive">
		</div>
    
  </div>

</div> 



<div class="row iconos_servicios">



<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" ng-repeat="servicio in servicios">
	<a class="linkServicio" alt="{{servicio.nombre}}" href="{{local_url}}/servicio/{{servicio.slug}}/{{servicio.id}}">
		<span class="icon" style="background-image:url('{{remote_url}}/images-servicios/{{servicio.filename}}');">
			<img ng-src="{{remote_url}}/images-servicios/{{servicio.filename}}" alt="{{servicio.nombre}}" class="iconHide">
		</span>
	</a>
</div>







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