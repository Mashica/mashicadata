<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>¿No tienes tu contraseña?</div>

		<div>
			<p>Para restablecer tu contraseña, rellena este formulario: {{ URL::to('password/reset', array($token)) }}. Este enlace te sirve durante los próximos {{ Config::get('auth.reminder.expire', 60) }} minutos.</p>

			<p>¡Apúrate!</p>

			<p>Nos vemos adentro,<br>Richard</p>
		</div>
	</body>
</html>
