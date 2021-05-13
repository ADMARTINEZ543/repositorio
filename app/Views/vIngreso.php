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
				
			    <tr>
					<td><?php echo $id_usuario; ?></td>
					<td><?php echo $usuario; ?></td>
					<td><?php echo $password; ?></td>
			    </tr>
				
			  </tbody>
			</table>
		
		</div>
	</div>
</body>
	<?php echo view('vFooter'); ?>
</html>