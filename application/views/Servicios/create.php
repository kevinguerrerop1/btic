<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->load->view("include/NavBar");?>
</head>
<body>
<br>
	<?php echo form_open('ServiciosControllers/store'); ?>
		<div class="container">
			<h2>Ingrese nuevo activo</h2>
			<label for="">Nombre Servicio</label>
			<input type="text" id="nomserv" name="nomserv" class="form-control" placeholder="Servicio" aria-describedby="basic-addon1">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	<?php echo form_close(); ?>
</body>
</html>
