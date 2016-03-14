<!DOCTYPE html>
<html lang="en" >

<?php include_once('includes_front/headers.php'); ?>


<body id="galeria" ng-app="masisaApp">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container">

<?php include_once('includes_front/menu_dos.php'); ?>


<div class="row">
	<div class="col-lg-12">
		<h2 class="orange">Galeria de imagenes</h2>
	</div>
</div>

<div class="row" ng-controller="galeriaController"><!-- row #1 -->

	<div class="col-md-6" ng-repeat="imagen in imagenes">
		
		<div class="thumbnail">
		<img ng-src="{{remote_url}}/images-galerias/{{imagen.filename}}" alt="..." />
		<div class="caption post-content">

		<a href="#"></a> 

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