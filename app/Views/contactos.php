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
	<?php
		$mysqli = new mysqli('localhost', 'root', '', 'proyecto_agenda');
	?>	
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
					Tabla Contactos
				</div>
				<div class="card-body">
					<h2>Agenda</h2>
					<br>
					<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
						Agregar nuevo
					</button>
					<hr>
					<div class="table-responsive">
						<table class="table table-hover" id="tablaload">
							<thead style="background-color: #f9afd5;color: white; font-weight: bold;">
								<td align="center">Nombre</td>
								<td align="center">Apellido Paterno</td>
								<td align="center">Apellido Materno</td>
								<td align="center">Telefono</td>
								<td align="center">E-mail</td>
								<td align="center">Categoria</td>
								<td align="center">Fecha</td>
								<td align="center">Editar</td>
								<td align="center">Eliminar</td>
							</thead>
							<tbody>
								<?php foreach($datos as $key): ?>
									<tr>

										<td align="center"><?php echo $key->nombre ?></td>
										<td align="center"><?php echo $key->paterno ?></td>
										<td align="center"><?php echo $key->materno ?></td>
										<td align="center"><?php echo $key->telefono ?></td>
										<td align="center"><?php echo $key->email ?></td>
										<td align="center"><?php echo $key->id_categoria ?></td>
										<td align="center"><?php echo $key->fecha?></td>
										<td style="text-align: center">
											<a href="<?php echo base_url().'/obtenerCont/'.$key->id_contacto?>" class="btn btn-warning btn-sm">Editar</a>
										</td>
										<td style="text-align: center">
											<a href="<?php echo base_url().'/eliminarcont/'.$key->id_contacto?>" class="btn btn-danger btn-sm">Eliminar</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal agregar-->
	<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Agregar Contacto </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?php echo base_url().'/Crearcontacto'?>">
						<label> Nombre </label>
						<input type="text" name="nombre" id="nombre" class="form-control input-sm">
						<label> Apellido Paterno </label>
						<input type="text" name="paterno" id="paterno" class="form-control input-sm">
						<label> Apellido Materno </label>
						<input type="text" name="materno" id="materno" class="form-control input-sm">
						<label> Telefono </label>
						<input type="text" name="telefono" id="telefono" class="form-control input-sm">
						<label> E-mail </label>
						<input type="text" name="email" id="email" class="form-control input-sm">
						<label> Fecha </label>
						<input type="DATE" name="fecha" id="fecha" class="form-control input-sm">
						<label>Categoria</label>
						<select name="id_categoria" id="id_categoria" class="form-control">
							<option disabled selected>Escoje categoria</option>
							<?php
							$query = $mysqli -> query ("SELECT id_categoria, Categoria FROM t_categorias");
							while ($valores = mysqli_fetch_array($query)) {?>
								<option value="<?php echo $valores[0]?>"><?php echo $valores[1]?></option>
							<?php }?>
						</select>
						<hr>
						<button type="button" class="btn btn-danger" data-dismiss="modal" >
							Cerrar
						</button>
						<button class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#tablaload').DataTable();
		} );
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		let mensaje = '<?php echo $mensaje ?>';

		if (mensaje =='1'){
			swal(':D','Agregado con exito','success');

		}else if(mensaje == '0'){
			swal(':(','Fallo al agregar','error');  
		}else if(mensaje == '2'){
			swal(':D','Actualizado con exito','success');  
		}else if(mensaje == '3'){
			swal(':D','Fallo al actualizar','error');  
		} else if(mensaje == '4'){
			swal(':D','Eliminado con exito','success');  
		}else if(mensaje == '5'){
			swal(':D','Fallo al eliminar','error');  
		}
	</script>
</body>
</html>