<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{ asset('/css/main.css') }}">
	<style>
	body {
		background-color: #F1F1F1;
	}
	</style>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingresar al Sistema</h3>
                    </div>
                    <div class="panel-body">
						<form action="home" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group has-feedback">
								<input type="text" id="username" class="form-control" placeholder="Nombre de Usuario" autofocus required>
								<span class="form-control-feedback">
									<i class="fa fa-user fa-lg"></i>
								</span>
							</div>
							<div class="form-group has-feedback">
								<input type="password" id="password" class="form-control" placeholder="Contraseña" required>
								<span class="form-control-feedback">
									<i class="fa fa-lock fa-lg"></i>
								</span>
							</div>
							<div>
								<div class="pull-left checkbox">
									<label>
										<input type="checkbox"> Recordarme 
									</label>
								</div>
								<!-- <div class="pull-right" id="forgot-pass">
									<a href="password">¿Olvidaste tu contraseña?</a>
								</div> -->
								<div class="clearfix"></div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary" id="btn-sign-in">
									<i class="fa fa-sign-in"></i>
									Entrar
								</button>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
    <script>
		var form = document.getElementsByTagName('form')[0];
		form.addEventListener('submit', function(){
			var btn = document.getElementById('btn-sign-in');

			btn.innerHTML = '<i class="fa fa-refresh fa-spin"></i> Ingresando...';
			btn.disabled = true;
		});
	</script>
</body>
</html>