<!DOCTYPE html>
<html lang="en">
  <?php include_once('includes_front/headers.php'); ?>
<body id="novedades" ng-app="masisaApp">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container" ng-controller="novedadesController">

<?php include_once('includes_front/menu_dos.php'); ?>


<div class="row">
	<div class="col-lg-12">
		<h2 class="orange">Novedades</h2>
	</div>
</div>

<div class="row"><!-- row #1 -->

<div class="col-md-6" ng-repeat="novedad in novedades">

			<div class="thumbnail">
			<img ng-src="{{remote_url}}/images-novedades/{{ novedad.filename }}" alt="..." class="responsive">
			
			<div class="caption post-content">
			<a href="{{local_url}}/novedades/{{novedad.slug}}/{{novedad.id}}"><h3>{{novedad.titulo}}</h3></a>
			</div>
			</div>

			</div>

	
</div> <!-- fin row  -->






</section><!-- end #main_content -->

<?php include_once('includes_front/footer.php'); ?>



</body>
<script>
	$('.carousel').carousel({
  interval: 2000
});
	
</script>
</html>