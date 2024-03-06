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
<br>
<body>
  <div class="container">
    <form name="form" action="<?php echo site_url('PrestamosControllers/create')?>" method="post">
      <button type="submit" class="btn btn-primary">Crear Nuevo Prestamo</button>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Articulo</th>
          <th scope="col">Persona que recibe</th>
          <th scope="col">Persona que entrega</th>
          <th scope="col">Servicio</th>
          <th scope="col">Ubicacion</th>
          <th scope="col">Fecha de entrega</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php foreach($prestamos as $prestamo){ ?>
        <tr>
          <td><?php echo $prestamo->id?></td>
          <td><?php echo $prestamo->marca?> <?php echo $prestamo->modelo?> <?php echo $prestamo->nroserie?></td>
          <td><?php echo $prestamo->ps?></td>
          <td><?php echo $prestamo->pe?></td>
          <td><?php echo $prestamo->nomserv?></td>
					<td><?php echo $prestamo->ubicacion?></td>
					<td><?php echo $prestamo->fchentrega?></td>
					</tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</body>
</html>
