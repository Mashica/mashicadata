<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Mashica Sport Data - Log in</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Mashica Sport Data</h3>
              <nav>
                <ul class="nav masthead-nav">
                <!-- 
                  <li class="active"><a href="#">Iniciar sesión</a></li>
                  <li><a href="/users">Atletas</a></li>
                  <li><a href="#">Pruebas</a></li>
                -->
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Los números no mienten.</h1>
            <p class="lead">¿Para qué nos tendrían que mentir? Cada quien da vida a los datos que le hablan. Aquí aseguramos de estar escuchando en el momento que tengan algo que decir.</p>
            <!-- <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p> -->


			<p class="lead">
				{{ Form::open(['route' => 'sessions.store', 'class' => 'form-signin', 'role' => 'form']) }}

				{{ Form::label('username', 'Username:', ['class' => 'sr-only']) }}
				{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'id' => 'inputUsername', 'autofocus' => 'autofocus', 'required' => 'required']) }}
        {{ $errors->first('username','<span class="error">:message</span>') }}


				{{ Form::label('password', 'Password:', ['class' => 'sr-only']) }}
				{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'id' => 'inputPassword']) }}
        {{ $errors->first('password','<span class="error alert-danger">:message</span>') }}

				{{ Form::submit('Escuchar', ['class' => 'btn btn-lg btn-primary btn-block']) }}


        @if (Session::has('flash_message'))
          <div class="form-control alert alert-danger">
            {{ Session::get('flash_message') }}
          </div>
        @endif

				{{ Form::close() }}
			</p>



          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Armando la batalla: <a href="http://mashica.com">Mashica</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </body>
</html>