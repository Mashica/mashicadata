@extends('layouts.default')


@section('content')

		<div class="col-md-12">

			<h1>Peso / Grasa / Músculo</h1>
	
			<hr>

		</div>

		
		<div class="col-md-4">

			@include('layouts.partials.errors')

			{{ Form::open(['route' => 'peso.store']) }}

			<div class="form-group">
				{{ Form::label('user_id', 'Atleta:') }}
				{{ Form::select('user_id', [null => 'Atleta...'] + $users, $userId, ['class' => 'form-control', 'autofocus' => 'autofocus']) }}
			</div>

			<div class="form-group">
				{{ Form::label('fecha', 'Fecha:') }}
				{{ Form::text('fecha', date("Y-m-d"), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'YYYY-MM-DD']) }}
			</div>

			<div class="form-group">
				{{ Form::label('peso', 'Peso:') }}
				{{ Form::text('peso', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'kg']) }}
			</div>

			<div class="form-group">
				{{ Form::label('grasa', 'Grasa:') }}
				{{ Form::text('grasa', null, ['class' => 'form-control', 'placeholder' => '%']) }}
			</div>

			<div class="form-group">
				{{ Form::label('musculo', 'Músculo:') }}
				{{ Form::text('musculo', null, ['class' => 'form-control', 'placeholder' => 'kg']) }}
			</div>



			<div class="form-group">
				{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
			</div>

			{{ Form::close() }}
		</div>

		<div class="col-md-1"></div>
		
		<div class="col-md-7">
	@if($user)
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
	@endif

		</div>

@stop
