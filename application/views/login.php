<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/bootstrap5.3/js/bootstrap.min.js" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/bootstrap5.3/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<form  id="form_prest" name="form_prest" accept-charset="" method="post" action="<?php echo site_url('userscontrollers/verificar_usuario')?>">
    <div class="container">
            <h2>Login</h2>
            <!-- Email input -->
			<label for="">Correo</label>
			<input type="text" id="Correo" name="Correo" class="form-control" placeholder="Correo" aria-describedby="basic-addon1">
			<br>
            <!-- Password input -->
			<label for="">Clave</label>
			<input type="text" id="Clave" name="Clave" class="form-control" placeholder="Clave" aria-describedby="basic-addon1">
			<br>
            <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
    </div>
</form>    
</body>
</html>
