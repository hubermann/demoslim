<!DOCTYPE html>

<?php  
$grupo_productos = array();
$novedades = array();
$productos = array();
$items_novedad = "";

?>

<!--  JavaScript -->
  

<html lang="en">

<?php include_once('includes_front/headers.php'); ?>

<body id="inicio" ng-app="masisaApp" ng-controller="inicioController">	

<?php include_once('includes_front/header.php'); ?>



<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <video controls style="width:100%;">

  <source src="assets/Masisa-video.mp4" type="video/mp4" />
  <p>Su navegador no soporta HTML5</p>
 </video>
    </div>
  </div>
</div>



<section id="main_content" class="container">

	<?php include_once('includes_front/menu_dos.php'); ?>

	<div class="row no-gutters"><!-- video y thumbs productos -->
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" class="videoContainer">
				<img ng-src="{{ remote_url }}/public_folder/img/photo_thumb_video.jpg" alt="video Masisa 50 años" class="photo_thumb_video">
				<span class="gradient"></span>
				<div class="caption">
					<h3>50 años de Masisa</h3>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Sed in lobortis massa. Lorem ipsum dolor sit amet, consectetur 
          adipiscing elit. Sed in lobortis massa.</p> -->
				</div>
			</a>
			
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-gutter" id="grupo_productos">
			
      <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12" ng-repeat="g_producto in grupo_productos">
          <div class="productosThumb">
            <img ng-src="{{ remote_url }}/images-productos/{{g_producto.filename}}" alt="" class="img-responsive">
            <div class="caption post-content">
              <hgroup>
                <h3><a href="{{local_url}}/producto-detalle/{{g_producto.id}}">{{g_producto.titulo}}</a></h3>
              </hgroup>
            </div>
          </div>
        </div>


      
			


		</div>
	</div><!-- end video y thumbs productos -->
	

	<div class="row"><!-- titulo Servicios -->
		<div class="col-lg-12">
			<h2 class="orange separator">Nuestros servicios</h2>
		</div>
	</div><!-- end titulo Servicios -->


<div class="row seven-cols no-gutters"><!-- thumbs Servicios  -->

  <div ng-repeat="servicio in servicios">
    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-6">
      <a class="linkServicio" alt="{{ servicio.nombre }}"href="servicio/{{servicio.slug}}/{{servicio.id}}">
      <span class="icon" style="background-image:url({{ remote_url }}/images-servicios/{{servicio.filename}});">
      <img ng-src="{{ remote_url }}/images-servicios/{{servicio.filename}}" alt="{{servicio.nombre}}" class="iconHide">
      </span>
      </a>
    </div>
  </div>


</div><!-- end thumbs Servicios -->

	<div class="row"><!-- slider novedades y productos -->
		<div class="col-md-6 col-lg-6"><!-- novedades -->
			<h2 class="orange separator">Novedades</h2>
			
<div id="carousel-novedades" class="carousel slide" data-ride="carousel">

<!-- Indicators
  <ol class="carousel-indicators">
    <li data-target="#carousel-novedades" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-novedades" data-slide-to="1"></li>
    <li data-target="#carousel-novedades" data-slide-to="2"></li>
  </ol>
 -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    

    <div class="item " ng-repeat="novedad in novedades" ng-class="{active : $first}">
      <img src="{{remote_url}}/images-novedades/{{novedad.filename}}" alt="..." class="img-responsive" >
      <div class="carousel-caption" style="text-align:left;">
          <a href="{{remote_url}}/novedades/{{novedad.slug}}/{{novedad.id}}">{{novedad.titulo}}</a>
      </div>
    <div class="carousel-caption date"><i class="fa fa-clock-o"></i> Publicado el:
        {{novedad.fecha}}
      </div>
    <span class="gradient"></span>
    </div>
    <!-- // -->
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-novedades" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-novedades" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div><!-- fin novedades -->







<div class="col-md-6 col-lg-6"><!-- productos -->
			<h2 class="orange separator">Productos destacados</h2>
			
			<div id="carousel-productos" class="carousel slide" data-ride="carousel">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#carousel-productos" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-productos" data-slide-to="1"></li>
    <li data-target="#carousel-productos" data-slide-to="2"></li>
  </ol>-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item" ng-repeat="producto in productos" ng-class="{active : $first}">
  <img ng-src="{{ remote_url }}/images-productos/{{ producto.imagen}}" class="img-responsive" >
  <div class="carousel-caption">
    <a href="{{local_url}}/producto-detalle/{{producto.id}}">{{ producto.titulo }}</a>
  </div>
 <span class="gradient"></span>
</div>

</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-productos" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-productos" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
		</div><!-- fin productos -->
	</div><!-- slider novedades y productos -->
	
</section><!-- end #main_content -->

<?php include_once('includes_front/footer.php'); ?>



</body>
<script>
	$('#carousel-novedades').carousel({
  interval: 2000
});
	$('#carousel-productos').carousel({
  interval: 2000
});
</script>
</html>
