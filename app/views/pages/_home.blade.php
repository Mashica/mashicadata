	@extends('layouts.default')


@section('content')

<div class="jumbotron">
	<h1>Mashica Sport Data</h1>
		<p>Mashica Sport Data es un espacio de alojamiento y resumen de datos para atletas de Mashica Sport. Aquí verán datos de salud como marcadores fisiológicos mostrando desarrollo atlético.</p>
		<p>Regístrate si quieres más información sobre Mashica Sport.</p>
		<p>Entra si eres ya Mashica.</p>
		<p>

		{{ link_to_route('users.index', 'Users &raquo;', $parameters = array(), $attributes = ['role' => 'button', 'class' => 'btn btn-lg btn-primary']); }}
		</p>
  </div>


@stop