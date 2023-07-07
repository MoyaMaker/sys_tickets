<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Tickets</title>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
</head>

<body>
	<header>
		<nav style="display: flex;gap: 1rem;">
			<img src="./assets/Tag.svg" alt="Tag" class="" width="32" height="32">
			<h1>Sistema de Tickets</h1>
		</nav>
	</header>

	<form action="/login" class="login-form" style="margin-top: 2.5rem;">
		<h3>Bienvenido</h3>
		<input type="text" name="username" id="username" class="input" placeholder="Usuario">

		<input type="password" name="password" id="password" class="input" placeholder="Contraseña">

		<button type="submit" class="button">Entrar</button>
	</form>
</body>

</html>