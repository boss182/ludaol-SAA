@extends('app')

@section('content')

<div role="tabpanel" class="tabpanel-main">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#home" class="tab-inner" aria-controls="home" role="tab" data-toggle="tab">Home</a>
		</li>
		<li role="presentation">
			<a href="#profile" class="tab-inner" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
		</li>
		</ul>
		<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="home">
			<div class="row">
				<div class="col-xs-12" id="draggablePanelList">
					<div class="col-xs-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
						  	Formularios
						  	<div class="pull-right">
						    	<button class="btn btn-primary btn-xs" data-toggle="collapse" data-target="#bloque4">
						    		<i class="fa fa-caret-down fa-rotate-180"></i>
						    	</button>
						    	<button class="btn btn-danger btn-xs">
						    		<i class="fa fa-times"></i>
						    	</button>
						    </div>
						  </div>
						  <div class="panel-body">
						  	<div class="collapse in" id="bloque4">
						  		<form>
						  			<h4 class="page-header mt0">Normal</h4>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									<div class="form-group">
										<label for="exampleInputFile">File input</label>
										<input type="file" id="exampleInputFile">
										<p class="help-block">Example block-level help text here.</p>
									</div>
									<div class="checkbox">
										<label>
										  <input type="checkbox"> Check me out
										</label>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
								<form class="form-inline mt20">
									<h4 class="page-header mt0">Verticales (Inline)</h4>
									<div class="form-group">
									<select name="name" id="as" class="form-control">
										<option value="">Oscar</option>
										<option value="">Giarfranco</option>
										<option value="">Admin</option>
									</select>
									</div>
									<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
									</div>
									<button type="submit" class="btn btn-success">Ok</button>
								</form>
						    	<form class="form-horizontal mt20">
						  			<h4 class="page-header mt0">Horizontales</h4>
									<div class="form-group">
										<label for="inputEmail3" class="col-xs-3 control-label">Email</label>
										<div class="col-xs-9">
										  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-xs-3 control-label">Password</label>
										<div class="col-xs-9">
										  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-xs-offset-3 col-xs-9">
										  <div class="checkbox">
										    <label>
										      <input type="checkbox"> Remember me
										    </label>
										  </div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-xs-offset-3 col-xs-9">
										  <button type="submit" class="btn btn-danger">Sign in</button>
										</div>
									</div>
								</form>
						  	</div>
						  </div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
						  	Colores de fondo
						  	<div class="pull-right">
						    	<button class="btn btn-primary btn-xs" data-toggle="collapse" data-target="#bloque5">
						    		<i class="fa fa-caret-down fa-rotate-180"></i>
						    	</button>
						    	<button class="btn btn-danger btn-xs">
						    		<i class="fa fa-times"></i>
						    	</button>
						    </div>
						  </div>
						  <div class="panel-body">
						    <div class="collapse in" id="bloque5">
						    	<div class="bs-example bs-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
								<p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
								<p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
								<p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
								<p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
								</div>
						  	</div>
						  </div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
						  	Buttons groups
						  	<div class="pull-right">
						    	<button class="btn btn-primary btn-xs" data-toggle="collapse" data-target="#bloque1">
						    		<i class="fa fa-caret-down fa-rotate-180"></i>
						    	</button>
						    	<button class="btn btn-danger btn-xs">
						    		<i class="fa fa-times"></i>
						    	</button>
						    </div>
						  </div>
						  <div class="panel-body">
						  	<div class="collapse in" id="bloque1">
						    	<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default">Left</button>
									<button type="button" class="btn btn-default">Middle</button>
									<button type="button" class="btn btn-default">Right</button>
								</div>
								<h5>Tamaños</h5>
								<div class="btn-group btn-group-lg" role="group" aria-label="...">
									<button type="button" class="btn btn-default">Left</button>
									<button type="button" class="btn btn-default">Middle</button>
									<button type="button" class="btn btn-default">Right</button>
								</div>
								<hr>
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default">Left</button>
									<button type="button" class="btn btn-default">Middle</button>
									<button type="button" class="btn btn-default">Right</button>
								</div>
								<hr>
								<div class="btn-group btn-group-sm" role="group" aria-label="...">
									<button type="button" class="btn btn-default">Left</button>
									<button type="button" class="btn btn-default">Middle</button>
									<button type="button" class="btn btn-default">Right</button>
								</div>
								<hr>
								<div class="btn-group btn-group-xs" role="group" aria-label="...">
									<button type="button" class="btn btn-default">Left</button>
									<button type="button" class="btn btn-default">Middle</button>
									<button type="button" class="btn btn-default">Right</button>
								</div>
						  	</div>
						  </div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
						  	List Groups
						  	<div class="pull-right">
						    	<button class="btn btn-primary btn-xs" data-toggle="collapse" data-target="#bloque2">
						    		<i class="fa fa-caret-down fa-rotate-180"></i>
						    	</button>
						    	<button class="btn btn-danger btn-xs">
						    		<i class="fa fa-times"></i>
						    	</button>
						    </div>
						  </div>
						  <div class="panel-body">
						    <div class="collapse in" id="bloque2">
						    	<ul class="list-group mb0">
									<li class="list-group-item"><span class="badge ">14</span>Cras justo odio</li>
									<li class="list-group-item"><span class="badge">4</span>Dapibus ac facilisis in</li>
									<li class="list-group-item"><span class="badge">11</span>Morbi leo risus</li>
									<li class="list-group-item"><span class="badge">29</span>Porta ac consectetur ac</li>
									<li class="list-group-item"><span class="badge">158</span>Vestibulum at eros</li>
								</ul>
						  	</div>
						  </div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
						  	Tables
						  	<div class="pull-right">
						    	<button class="btn btn-primary btn-xs" data-toggle="collapse" data-target="#bloque3">
						    		<i class="fa fa-caret-down"></i>
						    	</button>
						    	<button class="btn btn-danger btn-xs">
						    		<i class="fa fa-times"></i>
						    	</button>
						    </div>
						  </div>
						  <div class="panel-body">
						    <div class="collapse in" id="bloque3">
						    	<table class="table table-striped table-bordered table-condensed table-hover mb0">
									<thead>
									<tr>
									  <th>#</th>
									  <th>First Name</th>
									  <th>Last Name</th>
									  <th>Username</th>
									</tr>
									</thead>
									<tbody>
									<tr class="active">
									  <th scope="row">1</th>
									  <td>Mark</td>
									  <td>Otto</td>
									  <td>@mdo</td>
									</tr>
									<tr class="success">
									  <th scope="row">2</th>
									  <td>Jacob</td>
									  <td>Thornton</td>
									  <td>@fat</td>
									</tr>
									<tr class="danger">
									  <th scope="row">3</th>
									  <td>Larry</td>
									  <td>the Bird</td>
									  <td>@twitter</td>
									</tr>
									<tr class="info">
									  <th scope="row">3</th>
									  <td>Juan</td>
									  <td>The Sith</td>
									  <td>@facebook</td>
									</tr>
									</tbody>
								</table>
						  	</div>
						  </div>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
						  	Panel heading without title
						  	<div class="pull-right">
						    	<button class="btn btn-primary btn-xs" data-toggle="collapse" data-target="#bloque6">
						    		<i class="fa fa-caret-down"></i>
						    	</button>
						    	<button class="btn btn-danger btn-xs">
						    		<i class="fa fa-times"></i>
						    	</button>
						    </div>
						  </div>
						  <div class="panel-body">
						    <div class="collapse" id="bloque6">
						    	Panel content
						  	</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="profile">
			<p>Panel 2</p>
		</div>
	</div>
</div>
@stop