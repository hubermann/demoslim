<!DOCTYPE html>
<html lang="en" ng-app="masisaApp">
  <?php include_once('includes_front/headers.php'); ?>
<body id="grupo_de_productos" ng-controller="grupoproductosController">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container">

<?php include_once('includes_front/menu_dos.php'); ?>


<div class="row">
	<div class="col-lg-12">
		<h2 class="orange">Grupo de productos</h2>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nam tenetur vero dolor blanditiis possimus vitae at, voluptates, officia quibusdam aut perferendis nisi, dolorem corporis id fuga consequuntur libero provident.</p> -->
	</div>
</div>

<div class="row"><!-- row #1 -->
	



<div class="col-md-4" ng-repeat="producto in productos">

			<div class="carousel slide" data-ride="carousel" id="carousel-prod{{producto.id}}">
			<!-- Indicators -->
			<!-- <ol class="carousel-indicators" ng-repeat="imagen in producto.imagenes" >
				<li data-target="#carousel-prod{{producto.id}}" data-slide-to="{{$index +1}}" ></li>
			</ol> -->

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

				<div class="item" ng-repeat="imagen in producto.imagenes"  ng-class="{active : $first}">
					<img ng-src="{{remote_url}}/images-productos/{{imagen.filename}}" alt="{{producto.titulo}}" class="responsive">
					<div class="carousel-caption">
						<a href="{{local_url}}/producto-detalle/{{producto.id}}">{{producto.titulo}}</a>
					</div>
				</div>


			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-prod{{producto.id}}" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>

			<a class="right carousel-control" href="#carousel-prod{{producto.id}}" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div> 


</div><!-- fin col-md-4 #1 -->


</section><!-- end #main_content -->

<?php include_once('includes_front/footer.php'); ?>



</body>
<script>
	$('.carousel').carousel({
  interval: 2000
});
	
</script>
</html>