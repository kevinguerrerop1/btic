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
	<?php echo form_open('InventarioControllers/store'); ?>
		<div class="container">
			<h2>Ingrese nuevo activo</h2>
			<label for="">Marca</label>
			<input type="text" id="marca" name="marca" class="form-control" placeholder="Marca" aria-describedby="basic-addon1">
			<br>
			<label for="">Modelo</label>
			<input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" aria-describedby="basic-addon1">
			<br>
			<label for="">Nro. Serie</label>
			<input type="text" id="nroserie" name="nroserie" class="form-control" placeholder="Nro. Serie" aria-describedby="basic-addon1">
			<br>
			<select class="form-select" aria-label="Default select example" id="idcat" name="idcat">
			<?php foreach($categorias as $categoria){ ?>
				<option value=<?php echo $categoria->id ?>><?php echo $categoria->nomcat ?></option>
			<?php }?>
			</select>
			<br>
			<button type="submit" class="btn btn-primary">Ingresar</button>
		</div>
	<?php echo form_close(); ?>
</body>
</html>
