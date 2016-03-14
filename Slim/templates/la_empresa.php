<!DOCTYPE html>
<html lang="en" ng-app="masisaApp">
  <?php include_once('includes_front/headers.php'); ?>
<body id="la_empresa" ng-controller="laempresaController">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container">


<?php include_once('includes_front/menu_dos.php'); ?>

<div class="row no-gutters">
	
<div id="wrapp_carousel_la_empresa">

<div class="carousel slide" data-ride="carousel" id="carousel-la-empresa">
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	

	<div class="item" ng-repeat="imagen in laempresa.imagenes" ng-class="{active : $first}">
		<img ng-src="{{remote_url}}/images-laempresa/{{imagen.filename}}" alt="img" class="img-responsive">
		<div class="carousel-caption">
		</div>
	</div>


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-la-empresa" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-la-empresa" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 


</div><!-- end #wrapp_carousel_la_empresa -->
</div>


<div class="row" id="maderera_pinar">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<h2 class="orange">{{laempresa.titulo}}</h2>
		<p ng-bind-html="laempresa.texto_principal | unsafe"></p>
	</div>
	<div class="col-md-1"></div>
</div>
	
<div class="row" id="nuestros_valores">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="bg_gris">
			<div class="inside">
				<h2 class="green">{{laempresa.titulo_secundario}}</h2>
				<p ng-bind-html="laempresa.texto_secundario | unsafe"></p>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>



<div class="row" id="mision_objetivos">

	<div class="col-md-1"></div>
	<div class="col-md-5">
		<h2 class="green align_center"><i class="fa fa-paper-plane fa-2x "></i><br>
		{{laempresa.titulo_texto1}}</h2>
		<p ng-bind-html="laempresa.texto1 | unsafe"></p>
	</div>

	<div class="col-md-5">
		<h2 class="green align_center"><i class="fa fa-bullseye fa-2x"></i><br>
		{{laempresa.titulo_texto2}}</h2>
		<p ng-bind-html="laempresa.texto2 | unsafe"></p>
	</div>
	<div class="col-md-1"></div>
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