<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aduana</title>
	<link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Aduana</a>
			</div>
			<div id="navbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menú <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> Administrador <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#modal-config" data-toggle="modal"><i class="fa fa-fw fa-cog"></i> Configuración</a></li>
							<li class="divider"></li>
							<li><a href="/"><i class="fa fa-fw fa-power-off"></i> Salir</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">

	@yield('content')

	</div>
	<div class="modal fade" id="modal-config">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Advertencia</h4>
				</div>
				<div class="modal-body">
					<p>Página en Construcción</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
    <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/js/jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>
    <script>
    	$('.collapse').on('hide.bs.collapse', function () {
		  $(this).closest('.panel-default').find('.btn-custom i').removeClass('fa-rotate-180');
		});
		$('.collapse').on('show.bs.collapse', function () {
		  $(this).closest('.panel-default').find('.btn-custom i').addClass('fa-rotate-180');
		});
		$('.tab-content').on('click', '.btn-danger', function(e) {
			if(confirm('Eliminar este bloque?')) {
				$(this).closest('.col-xs-4').fadeOut('slow', function() {
					$(this).remove();
				});
			}
		});
		jQuery(function($) {
        var panelList = $('#draggablePanelList');

        panelList.sortable({
            // Only make the .panel-heading child elements support dragging.
            // Omit this to make then entire <li>...</li> draggable.
            handle: '.panel-heading', 
            update: function() {
                $('.panel', panelList).each(function(index, elem) {
                     var $listItem = $(elem),
                         newIndex = $listItem.index();
                    console.info(newIndex, index);
                     // Persist the new indices.
                });
            }
        });
    });
    </script>
</body>
</html>