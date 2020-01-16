<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal Contacto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1>Contactenos</h1>

	@if (session('ok'))
	<div class="alert alert-success">
        {{ session('ok') }}
    </div>
	@endif

	<table class="table table-striped table-hover">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($contactos as $cont)
			<tr>
				<td>{{ $cont->id }}</td>
				<td>{{ $cont->nombre }}</td>
				<td>{{ $cont->telefono }}</td>
				<td>
					<a href="{{ Route('contacto.show', $cont->id) }}">Ver</a>
					<a href="">Editar</a>
					<a href="">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	
	
</body>
</html>