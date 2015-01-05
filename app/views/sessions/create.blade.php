<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
{{ Form::open(['route' => 'sessions.store']) }}

{{ Form::label('username', 'Username:') }}
{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario']) }}


{{ Form::label('password', 'Password:') }}
{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) }}
{{ $errors->first('password','<span class="error alert-danger">:message</span>') }}

{{ Form::submit('Escuchar') }}

{{ Form::close() }}
</body>
</html>