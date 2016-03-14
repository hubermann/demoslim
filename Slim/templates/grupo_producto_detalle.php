<!DOCTYPE html>
<html lang="en">
  <?php include_once('includes_front/headers.php'); ?>
<body id="grupo_producto" ng-app="masisaApp">
<script>
  window.idproducto = "<?php echo $idproducto; ?>";
</script>
<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container"  ng-controller="productosController">

<?php include_once('includes_front/menu_dos.php'); ?>

<div class="row">

<div class="col-md-7">

<div id="carousel-productos" class="carousel slide" data-ride="carousel">
  
<!-- Indicators -->
<!--   <ol class="carousel-indicators">
  <li data-target="#carousel-productos" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-productos" data-slide-to="1"></li>
  <li data-target="#carousel-productos" data-slide-to="2"></li>
</ol> -->
<?php  

$items_slider_list = "";
$thumbnails_list = "";
$count_list=1;
$imagenes_producto = "";
if($imagenes_producto){

  echo '
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-productos" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-productos" data-slide-to="1"></li>
    <li data-target="#carousel-productos" data-slide-to="2"></li>
  </ol>
  ';

  foreach ($imagenes_producto as $imagen_producto) {
    
    #thumbnails
    $thumbnails_list .= '<a><img src="'.base_url('images-productos/'.$imagen_producto->filename).'" alt="" onclick="view_image(\'item_number'.$count_list.'\');"></a>';
    
    # item del slider
    # paso en cada item un id qeu luego uso desde su thumbanil para quitar la clase "active"
    # y agregar el seleccionado como "active" para que sea el visible.
    $clase_para_activo = "";
    if($count_list==1){$clase_para_activo = "active";}//al primerlo lo pongo activo la primera vez}
    $items_slider_list .='<div class="item '.$clase_para_activo.'" id="item_number'.$count_list.'">
      <img src="'.base_url('images-productos/'.$imagen_producto->filename).'" alt="image" class="responsive" width="100%">
      <div class="carousel-caption">
        
      </div>
    </div>';

    $count_list++;
  }

}

?>


   <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item" ng-repeat="imagen in producto.imagenes" ng-class="{active : $first}" id="item_number{{$index +1}}" >
     <img ng-src="{{remote_url}}/images-productos/{{ imagen.filename }}" alt="..." class="responsive">
      <div class="carousel-caption">
        
      </div>
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

</div><!-- end slider productos -->


	<div class="col-md-5" ><!-- Descripcion producto -->
    <h2 class="orange">{{producto.titulo}}</h2>
          <p>{{producto.descripcion}}</p>


    <?php  
   # echo '';

   # if(!empty($producto->adjunto)){
     # echo '<p id="adjunto_producto"><a target="_blank"href="'.base_url('adjuntos-productos/'.$producto->adjunto).'">Descargar PDF</a></p>';
    #}
    ?>


<div id="visualizador"></div>
<div id="thumbs_productos">


<a ng-repeat="imagen in producto.imagenes">
   <img ng-src="{{remote_url}}/images-productos/{{ imagen.filename }}" alt="" ng-click="view_image('item_number{{$index +1}}');"></a>
<?php  

#echo $thumbnails_list;

?>

</div>

	</div><!-- end descripcion producto -->
</div>

</section><!-- end #main_content -->

<?php include_once('includes_front/footer.php'); ?>



</body>


<script>
  function view_image(item){
    alert(item);
    var item_activo = document.getElementById(item);
    $('.active').removeClass('active');
    item_activo.setAttribute("class", "item active");
    

  }
</script>

</html>