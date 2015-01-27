@extends('layouts.default')


@section('content')


	<div class="container-fluid">

<!-- 		<div class="row">
			<div class="jumbotron">
				<h1>Hello, world!</h1>
				<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
				<p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
			</div>
		</div>

 -->
		<div class="page-header">
			<h1>Captura</h1>
		</div>

		<div class="row">
	        <div class="col-md-4">
	          <h4>Peso Corporal</h4>
	          <p>Peso, porcentaje de grasa, y masa de músculo.</p>
	          <p><a class="btn btn-default" href="/peso" role="button">Añadir &plus;</a></p>
	        </div>
<!-- 	        <div class="col-md-4">
	          <h4>MAF</h4>
	          <p>Maximum Aerobic Function. Prueba de Dr. Phil Maffeton para medir cambios en la capacidad aeróbica.</p>
	          <p><a class="btn btn-default" href="#" role="button">Añadir &plus;</a></p>
	       </div>
	        <div class="col-md-4">
	          <h4>Viguera-Muro</h4>
	          <p>Variación de la prueba MAF. Subir a un paso aeróbico en el libramiento de San Felipe desde la primera pluma de Viguera.</p>
	          <p><a class="btn btn-default" href="#" role="button">Añadir &plus;</a></p>
	        </div>
	        <div class="col-md-4">
	          <h4>Subida El Estudiante</h4>
	          <p>Máximo esfuerzo. Subir desde el monumento de Juárez hasta El Estudiante en menos tiempo posible.</p>
	          <p><a class="btn btn-default" href="#" role="button">Añadir &plus;</a></p>
	        </div>
	        <div class="col-md-4">
	          <h4>Natación 400m</h4>
	          <p>Máximo esfuerzo. 400m.</p>
	          <p><a class="btn btn-default" href="#" role="button">Añadir &plus;</a></p>
	        </div>
	        <div class="col-md-4">
	          <h4>Natación 1500m</h4>
	          <p>Máximo esfuerzo. 1500m.</p>
	          <p><a class="btn btn-default" href="#" role="button">Añadir &plus;</a></p>
	        </div>
 -->		</div>


		<div class="page-header">
			<h1>Atletas</h1>
		</div>

		<div class="row">

		@foreach ($users as $user)

			<div class="col-md-4">
				<h4>{{ $user->full_name }}</h4>
				<!-- <p>{{ link_to("mailto:$user->email", $user->email) }}</p> -->
				<p>{{ link_to("/{$user->username}", $user->username, ['role' => 'button', 'class' => 'btn btn-default']) }}</p>

			</div>

		@endforeach


		</div>


	</div>


          


@stop