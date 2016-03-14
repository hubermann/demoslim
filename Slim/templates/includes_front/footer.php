<footer class="container">
	<div class="row">
		<div class="col-md-3">
			<h4>Galeria de imagenes</h4>
			<div id="galeria_footer" ng-controller="galeriaController">
				

				<div class="thumb_footer" ng-repeat="imagen in imagenes |limitTo:9">
					<a href="{{ local_url }}/imagenes"><img src="{{ remote_url }}/images-galerias/{{imagen.filename}}" width="190" alt="..." class="responsive"></a>
				</div>

			</div>
		</div>

		
		<div class="col-md-3">
			<h4>Productos</h4>
			<ul id="footer_productos_links" ng-controller="footerController">
				<li ng-repeat="producto in footer_productos"><a href="{{local_url}}/producto-detalle/{{producto.id}}">{{producto.titulo}}</a></li>
			</ul>
		</div>

		<div class="col-md-3">
			<h4>Servicios</h4>
			<ul id="footer_servicios_links" ng-controller="footerController">
				<li ng-repeat="servicio in footer_servicios"><a href="{{local_url}}/servicio/{{servicio.slug}}/{{servicio.id}}">{{servicio.nombre}}</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<h4>Horarios y direcci&oacute;n</h4>
			<p>Cno. Gral Belgrano 5051 - Florencio Varela</p>
			<p>Buenos Aires - Argentina</p>
			<p>Tel/Fax: 4210-0121 / 4881</p>
			<div id="logos_footer">
				<img src="<?php echo base_url('public_folder/img/logos-footer.png'); ?>" alt="..." class="responsive">
			</div>
		</div>
	</div>
</footer>