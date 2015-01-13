@extends('layouts.default')


@section('content')

	<div class="col-md-12">
	
	<h1>{{ $user->name . " " . $user->lastname }}</h1>
	
		<p>{{ link_to_route('users.edit', 'edit', $parameters = array($user->username), $attributes = ['class' => 'btn btn-link btn-xs']) }}</p>
		
		<hr>

	</div>
	<div class="col-md-4">

		<p><strong>Username:</strong> {{ $user->username }}</p>

		<p><strong>Password:</strong> ***** {{ link_to('#', 'Cambiar Password', ['class' => 'btn btn-default btn-xs']) }}</p>

		<p><strong>Email:</strong> {{ $user->email }}</p>

		<!-- <p><strong>Fecha Alta:</strong> {{ date("F j, Y", strtotime($user->created_at)) }}</p> -->

		@if ($user->isactive <> 0)
			<p class="text-success">Active</p>
		@else
			<p class="text-danger">Not Active</p>
		@endif
		

	</div>

	<div class="col-md-1"></div>
	<div class="col-md-7">
	
	@if($user->pesos->count() > 0)

		<div class="table-responsive">
		<table class="table table-hover table-condensed">

			<caption>Peso / Grasa / Músculo</caption>

			<thead>
				<tr>
					<th>Fecha</th>
					<th>Peso</th>
					<th>Grasa</th>
					<th>músculo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach ($user->pesos()->orderBy('fecha','desc')->get() as $pesoDia)
				<tr class="">
					<td>{{ date("F j, Y", strtotime($pesoDia->fecha)) }}</td>
					<td>{{ $pesoDia->peso }} kg</td>
					<td>{{ $pesoDia->grasa }} %</td>
					<td>{{ $pesoDia->musculo }} kg</td>
					<td>{{ link_to_route('peso.edit', 'edit', $parameters = array($pesoDia->id), $attributes = ['class' => 'btn btn-link btn-xs']) }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		</div>
	@endif

	</div>

@stop