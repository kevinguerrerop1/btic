
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
		<div class="row">
			<div class="col-sm d-flex justify-content-center">
				<h2>Registro</h2>
			</div>
		</div>

	<table class="table table-striped">
		<thead>
			<tr>
			<th scope="col">RUT</th>
			<th scope="col">Nombre</th>
			<th scope="col">Tipo Consulta</th>
			<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">11111111-1</th>
			<td>Juan Perez</td>
			<td>Retiro Medicamentos</td>
			<td>
                <button class="btn btn-success">Aceptar</button>
                <button class="btn btn-danger">Rechazar</button>
            </td>
			</tr>
			<tr>
			<th scope="row">22222222-2</th>
			<td>Maria Hernandez</td>
			<td>Consulta General</td>
			<td>
                <button class="btn btn-success">Aceptar</button>
                <button class="btn btn-danger">Rechazar</button>
            </td>
			</tr>
			<tr>
			<th scope="row">33333333-3</th>
			<td>Juan Lopez</td>
			<td>Ley Ricarte Soto</td>
			<td>
                <button class="btn btn-success">Aceptar</button>
                <button class="btn btn-danger">Rechazar</button>
            </td>
			</tr>
		</tbody>
	</table>
    </div>
</body>
</html>



