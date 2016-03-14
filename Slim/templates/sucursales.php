<!DOCTYPE html>
<html lang="en" ng-app="masisaApp">
  <?php include_once('includes_front/headers.php'); ?>

<body id="sucursales" ng-controller="sucursalesController">

<?php include_once('includes_front/header.php'); ?>

<section id="main_content" class="container">

<?php include_once('includes_front/menu_dos.php'); ?>


<div class="row">
	<div class="col-lg-12">
		<h2 class="orange">Sucursales</h2>
	</div>
</div>


<style>
	#mensaje_enviado{color: #018249; padding: .8em; text-align: center;}
</style>
<div class="row"><!-- row #1 -->
	


<div class="col-md-4" ng-repeat="sucursal in sucursales" | filter:'!\'><!-- sucursal -->
		
			<div class="thumbnail" ng-bind-html-unsafe="sucursal.mapa">
				<p ng-bind-html="sucursal.mapa | unsafe"></p>
			</div>

			 
		
			
			
			<h2 class="green">{{sucursal.nombre}} <br><span class="orange">{{sucursal.localidad}}</span></h2>

			<ul id="datos_sucursal">
				<li><i class="fa fa-plus-square fa-2x"></i> {{sucursal.direccion }}</li>
				<li><i class="fa fa-phone-square fa-2x"></i> {{sucursal.telefono }}</li>
				<li ng-show="sucursal.telefono2" ><i class="fa fa-phone-square fa-2x"></i> {{sucursal.telefono2 }}</li>
				<li><i class="fa fa-envelope fa-2x"></i> {{sucursal.mail}}</li>
				<li><i class="fa fa-clock-o fa-2x"></i> {{sucursal.horario}}</li>
			</ul>

		</div><!-- fin suc 1-->





	
</div> <!-- fin row #1 -->

<div class="row">
	<!-- /////////////////////////////ROW-DIVISION/////////////////////////// -->
	<div class="col-lg-12"><hr></div>
</div>


<div class="row">
	<div class="col-md-12">
		<!-- SHOW ERROR/SUCCESS MESSAGES -->
  		<div id="messages"></div>
	</div>
</div>

<div class="row" id="formulario"><!-- row #2 -->
	
	


	<form>
		
	
		<div class="row">
			<div class="col-md-6" style="margin-left:1.5em; margin-bottom:1em;">
			<label>Sucursal</label>
			<select name="sucursal" id="sucursal" class="form-control">
				<option value="Pilar">Pilar</option>
				<option value="Munro">Munro</option>
				<option value="Quilmes">Quilmes</option>
			</select>
			</div>

		</div>
		
		
		<div class="col-md-6">
			
			<!-- NAME -->
			<div id="nombre-group" class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" placeholder="Bruce Wayne">
			<span class="help-block"></span>
			</div>

			<div id="telefono-group" class="form-group">
			<label>Telefono</label>
			<input type="text" name="telefono" class="form-control" placeholder="">
			<span class="help-block"></span>
			</div>



		</div>
		<div class="col-md-6">
			
			<div id="apellido-group" class="form-group">
			<label>Apellido</label>
			<input type="text" name="apellido" class="form-control" placeholder="">
			<span class="help-block"></span>
			</div>

			<div id="email-group" class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" placeholder="nombre@dominio.com">
			<span class="help-block"></span>
			</div>

		</div>


		<div class="col-lg-12">
			<div id="mensaje-group" class="form-group">
				<textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="7"></textarea>
				<span class="help-block"></span>
			</div>
			<p id="wrapp_container"><button type="submit">Enviar</button>	</p>
		</div>
	</form>

	
	
</div> <!-- fin row #2 -->







</section><!-- end #main_content -->

<?php include_once('includes_front/footer.php'); ?>



</body>
<!-- PROCESS FORM WITH AJAX (OLD) -->
<script>
$(document).ready(function() {

// process the form
$('form').submit(function(event) {

  // remove the past errors
  $('#nombre-group').removeClass('has-error');
  $('#nombre-group .help-block').empty();
  $('#email-group').removeClass('has-error');
  $('#email-group .help-block').empty();
  $('#mensaje-group').removeClass('has-error');
  $('#mensaje-group .help-block').empty();

  // remove success messages
  $('#messages').removeClass('alert alert-success').empty();

  // get the form data
  var formData = {
      'nombre'              : $('input[name=nombre]').val(),
      'apellido'              : $('input[name=apellido]').val(),
      'sucursal'              : $('select[name=sucursal]').val(),
      'email'    : $('input[name=email]').val(),
      'mensaje'    : $('textarea[name=mensaje]').val()
  };

  // process the form
  $.ajax({
    type        : 'POST',
    url         : 'process',
    data        : formData,
    dataType    : 'json',
    success     : function(data) {

      // log data to the console so we can see
      console.log(data);

      // if validation fails
      // add the error class to show a red input
      // add the error message to the help block under the input
      if ( ! data.success) {

        if (data.errors.nombre) {
          $('#nombre-group').addClass('has-error');
          $('#nombre-group .help-block').html(data.errors.nombre);
        }

        if (data.errors.email) {
          $('#email-group').addClass('has-error');
          $('#email-group .help-block').html(data.errors.email);
        }

        if (data.errors.mensaje) {
          $('#mensaje-group').addClass('has-error');
          $('#mensaje-group .help-block').html(data.errors.mensaje);
        }

      } else {

        // if validation is good add success message
        $('#messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
        $('#formulario').hide('slow');
      }
    }
  });

  // stop the form from submitting and refreshing
  event.preventDefault();
});

});
</script>


<script>
	$('.carousel').carousel({
  interval: 2000
});
	
</script>
</html>
