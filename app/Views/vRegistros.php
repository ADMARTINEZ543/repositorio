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
			<h1>Registros actuales</h1>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Usuario</th>
			      <th scope="col">Contraseña</th>
			    </tr>
			  </thead>
			  <tbody>
				<?php foreach ($usuarios as $usuario) { ?>
			    <tr>
					<td><?php echo $usuario['id_usuario']; ?></td>
					<td><?php echo $usuario['usuario']; ?></td>
					<td><?php echo $usuario['password']; ?></td>
			    </tr>
				<?php } ?>
			  </tbody>
			</table>
		
		</div>
	</div>
</body>
	<?php echo view('vFooter'); ?>
</html>