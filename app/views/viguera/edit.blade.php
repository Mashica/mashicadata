@extends('layouts.default')


@section('content')

		<div class="col-md-12">

			<h1>Subidas Viguera-Muro</h1>
	
			<hr>

		</div>

		
		<div class="col-md-4">

			@include('layouts.partials.errors')

			{{ Form::model($viguera, ['method' => 'patch', 'route' => ['viguera.update', $viguera->id]]) }}

			{{ Form::hidden('id',null) }}

			<div class="form-group">
				{{ Form::label('user_id', 'Atleta:') }}
				{{ Form::select('user_id', [null => 'Atleta...'] + $users, $user->id, ['class' => 'form-control', 'autofocus' => 'autofocus']) }}
			</div>

			<div class="form-group">
				{{ Form::label('fecha', 'Fecha:') }}
				{{ Form::text('fecha', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'YYYY-MM-DD']) }}
			</div>

			<div class="form-group">
				{{ Form::label('ordinal', 'Ordinal:') }}
				{{ Form::selectRange('ordinal', 1, 10, null, ['class' => 'form-control', 'autofocus' => 'autofocus']) }}
			</div>

			<div class="form-group">
				{{ Form::label('fc', 'Frecuencia Cardíaca:') }}
				{{ Form::text('fc', null, ['class' => 'form-control', 'placeholder' => 'ppm']) }}
			</div>

			<div class="form-group">
				{{ Form::label('tiempo', 'Tiempo:') }}
				{{ Form::text('tiempo', null, ['class' => 'form-control', 'placeholder' => 'hr:min:seg']) }}
			</div>



			<div class="form-group">
				{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
			</div>

			{{ Form::close() }}


			{{ Form::model($viguera, ['method' => 'delete', 'route' => ['viguera.destroy', $viguera->id]]) }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			{{ Form::close() }}

		</div>

		<div class="col-md-1"></div>
		
		<div class="col-md-7">

		<div class="table-responsive">
		<table class="table table-hover table-condensed">

			<caption>Subidas Viguera-Muro
				
				{{ link_to_route('viguera.show', 'add', $parameters = array($user->username), $attributes = ['class' => 'btn btn-link btn-xs'])}}
			</caption>

			<thead>
				<tr>
					<th>Fecha</th>
					<th>Ordinal</th>
					<th>FC</th>
					<th>Tiempo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach ($user->viguera()->orderBy('fecha','desc')->orderBy('ordinal','asc')->get() as $vigueraDia)				

				@if($viguera->id == $vigueraDia->id)
			
				<tr class="success">
			
				@else
			
				<tr>
			
				@endif
			
					<td>{{ date("F j, Y", strtotime($vigueraDia->fecha)) }}</td>
					<td>{{ $vigueraDia->ordinal }}</td>
					<td>{{ $vigueraDia->fc }}</td>
					<td>{{ $vigueraDia->tiempo }}</td>
					<td>{{ link_to_route('viguera.edit', 'edit', $parameters = array($vigueraDia->id), $attributes = ['class' => 'btn btn-link btn-xs']) }}</td>
				</tr>
			
			@endforeach
			
			</tbody>
		</table>
		</div>

		</div>

@stop
