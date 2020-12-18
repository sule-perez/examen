<?php 
    $idCategoria = $datos[0]['id_categoria'];
    $categoria = $datos[0]['categoria']; 
    $descripcion = $datos[0]['descripcion'];
    $fecha = $datos[0]['fecha'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Datatable</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>	
</head>
<body background="<?php echo base_url('fondo.jpg') ?>">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<a class="navbar-brand" href="#">Agenda</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('/') ?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Categorias') ?>">Categoria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Contactos') ?>">Contactos</a>
					</li>
				</ul>
			</div>
		</nav>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="card-header">
					Tabla Categorias
				</div>
				<div class="card-body">
					<h2>Actualizar categorias</h2>
					<hr>
					<form method="POST" action="<?php echo base_url().'/ActualizarCat' ?>">
						<input type="text" id="idCategoria" name="idCategoria" hidden="idCategoria" value="<?php echo $idCategoria ?>">
						<label for="categoria">Categoria</label>
						<input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $categoria ?>">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion ?>">
						<label for="fecha">Fecha</label>
						<input type="DATE" name="fecha" id="fecha" class="form-control" value="<?php echo $fecha ?>"><br>
						<button class="btn btn-warning">Editar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>