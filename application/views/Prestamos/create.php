<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
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
			<?php foreach($Inventario as $Inventari){ ?>
				<option value=<?php echo $Inventari->id ?>><?php echo $Inventari->marca. " " .$Inventari->modelo. " " .$Inventari->nroserie   ?></option>
			<?php }?>
			</select>
			<br>
			<select class="form-select" aria-label="Default select example" id="idcat" name="idcat">
			<?php foreach($Inventario as $Inventari){ ?>
				<option value=<?php echo $Inventari->id ?>><?php echo $Inventari->marca. " " .$Inventari->modelo. " " .$Inventari->nroserie   ?></option>
			<?php }?>
			</select>
			<br>
			<button type="submit" class="btn btn-primary">Ingresar</button>
		</div>
	<?php echo form_close(); ?>
</body>
</html>
