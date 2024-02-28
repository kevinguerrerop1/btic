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
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Nro. Serie</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php if($articulos){ ?>
        <?php foreach($articulos as $articulo){ ?>
        <tr>
          <td><?php echo $articulo->id?></td>
          <td><?php echo $articulo->marca?></td>
          <td><?php echo $articulo->modelo?></td>
          <td><?php echo $articulo->nroserie?></td>
        </tr>
        <?php }?>
        <?php }else{ ?>            
    <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>
