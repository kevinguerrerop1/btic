<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php $this->load->view("include/NavBar");?>
</head>
<br>
<body>
  <div class="container">
    <form name="form" action="<?php echo site_url('ServiciosControllers/create')?>" method="post">
      <button type="submit" class="btn btn-primary">Crear Nuevo Producto</button>
    </form>
    <table class="table">
      <thead>
        <tr>
			<th scope="col">#</th>
			<th scope="col">Servicio</th>
			<th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php foreach($servicios as $servicio){ ?>
        <tr>
			<td><?php echo $servicio->id ?></td>
			<td><?php echo $servicio->nomserv ?></td>
			<td><button type="button" class="btn btn-info">Info</button></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</body>
</html>
