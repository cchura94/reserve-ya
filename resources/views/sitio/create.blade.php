<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear nuevo Contacto</title>
</head>
<body>
	<h1>MODIFICADO------------------</h1>
	<h2>MODIFICACION DESDE MI RAMA</h2>
	<h1>Crear nuevo Contacto</h1>
	<form action="{{ Route('contacto.store') }}" method="post">
		@csrf
		<label for="nom">Nombre</label>
		<input type="text" name="nombre" id="nom">
		<br>
		<label for="tel">telefono</label>
		<input type="text" name="telefono" id="tel">
		<br>
		<input type="submit">		
	</form>
	
</body>
</html>