<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>inicio</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<a class="navbar-brand" href="#">Agenda</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
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
		<hr>
		<hr>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-4" >
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo base_url('foto1.jpg') ?>" alt="First slide" width="110px">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo base_url('img1.jpeg') ?>" alt="Second slide" width="110px">
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="col-sm-6" style="border: 1px solid pink;">
				<table class="table table-hover" >
					<tr>
						<td colspan="2" align="center" style="background-color: #f9afd5; font-size:60px;">Usuario</td>
					</tr>
					<tr>
						<td align="center">Nombre</td>
						<td align="center">Pérez Gómez Suleydi Amayrani</td>
					</tr>
					<tr>
						<td align="center" style="background-color: #f9afd5;">Carrera</td>
						<td align="center" style="background-color: #f9afd5;">Ingenieria en Sistemas Computacionales</td>
					</tr>
					<tr>
						<td align="center">Especialidad</td>
						<td align="center">Administración en Servicios Web</td>
					</tr>
					<tr>
						<td align="center" style="background-color: #f9afd5;">Semestre</td>
						<td align="center" style="background-color: #f9afd5;">9no Semestre</td>
					</tr>
					<tr>
						<td align="center">Institución</td>
						<td align="center">TECNM CAMPUS TLAHUAC</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>