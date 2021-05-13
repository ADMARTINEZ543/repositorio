<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Registros</title>
</head>
<body>
	<?php echo view('vNavbar'); ?>
	<div class="container">
		<div class="row">
			<h1>Registro encontrado</h1>

		<form method="POST" action="<?php echo base_url(); ?>/Home/actualizarRegistro">
			<input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
			<div class="mb-3 row">
	    		<label for="email" class="col-sm-2 col-form-label">Email</label>
	    		<div class="col-sm-10">
	      			<input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario; ?>">
	    		</div>
	  		</div>
	  		<div class="mb-3 row">
	    		<label for="password" class="col-sm-2 col-form-label">Password</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
	    		</div>
	  		</div>
	  		<div class="mb-3 row">
	    		<button type="submit" class="btn btn-primary mb-3">Actualizar</button>
	    		<a type="button" class="btn btn-danger mb-3" href="<?php echo base_url(); ?>/Home/eliminarRegistro/<?php echo $id_usuario; ?>">Eliminar</a>
	  		</div>

		
		</div>
	</div>
</body>
	<?php echo view('vFooter'); ?>
</html>