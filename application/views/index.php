<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		
	</style>
</head>
<body>

<div class="container" >
	<br>
	<div class="row">
		<div class="col-sm d-flex justify-content-center">
			<h2>SELECCIONE UNA OPCION</h2>
		</div>
	</div>
	<div class="position-absolute top-50 start-50 translate-middle ">
		<form name="form1" action="<?php echo site_url('index/indexrut')?>" method="post">
			<div class="row">
				<div class="d-grid gap-2">
					<input type="submit" value="General" class="btn btn-primary">
				</div>
			</div>
		</form>
		<br>
		<br>
		<form name="form1" action="<?php echo site_url('index/vistausuario')?>" method="post">
			<div class="row">
				<div class="col-sm d-flex justify-content-center">
					<input type="submit" value="Preferencial" class="btn btn-primary">					
				</div>
			</div>
		</form>
		<br>
		<br>
		<form name="form1" action="<?php echo site_url('InventarioControllers/viewinventario')?>" method="post">
			<div class="row">
				<div class="col-sm d-flex justify-content-center">
					<input type="submit" value="Inventario" class="btn btn-primary">					
				</div>
			</div>
		</form>	
	</div>
</div> 

</body>
</html>
