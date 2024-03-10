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
    <form name="form" action="<?php echo site_url('CategoriasControllers/create')?>" method="post">
      <button type="submit" class="btn btn-primary">Crear Nueva Categoria</button>
    </form>
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php foreach($categorias as $categoria){ ?>
        <tr>
          <td><?php echo $categoria->id ?></td>
          <td><?php echo $categoria->nomcat ?></td>
          <td><a onClick="location.href='<?php echo site_url('InventarioControllers/viewinventarioxcat/'.$categoria->id.'')?>'" type="button" class="btn btn-danger">Info</a></td>              
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
	<?php $this->load->view("include/Footer");?>
</body>
</html>
