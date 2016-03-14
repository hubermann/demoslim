<!DOCTYPE html>
<html lang="en">
  <?php include_once('includes_front/headers.php'); ?>

  
<body id="capacitaciones" ng-app="masisaApp">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container" ng-controller="redMasisaController">


<?php include_once('includes_front/menu_dos.php'); ?>


<div class="row iconos_servicios">
<div class="col-lg-12">
<h1>{{redMasisa.titulo}}</h1>

<p>{{redMasisa.texto}}</p>





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