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
    <table class="table" id="myTable">
      <thead>
        <tr>
			<th scope="col">#</th>
			<th scope="col">Nombre</th>
			<th scope="col">Apellido</th>
			<th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php foreach($users as $user){ ?>
        <tr>
			<td><?php echo $user->id ?></td>
			<td><?php echo $user->Nombre ?></td>
			<td><?php echo $user->Apellido ?></td>
			<td><button type="button" class="btn btn-info">Info</button></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
	<?php $this->load->view("include/Footer");?>
</body>
</html>
