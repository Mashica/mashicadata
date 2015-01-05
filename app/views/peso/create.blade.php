@extends('layouts.default')


@section('content')

	<div class="row">

		<div class="col-md-12">

			<div class="page-header">
				<h1>Peso / Grasa / Músculo</h1>
			</div>

		</div>

		
		<div class="col-md-4">

			@include('layouts.partials.errors')

			{{ Form::open(['route' => 'peso.store']) }}

			<div class="form-group">
				{{ Form::label('user_id', 'Atleta:') }}
				{{ Form::select('user_id', [null => 'Atleta...'] + $users, $atletaId, ['class' => 'form-control', 'autofocus' => 'autofocus']) }}
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
		
		<div class="col-md-7" id="historial">
			
	@if ($historial != null)

			<strong>Historial</strong>
			<p>{{ User::find($atletaId)->name  . " " . User::find($atletaId)->lastname }}</p>

			<div class="">

		@foreach ($historial as $pesoDia)
			<ul>
				<li>{{ date("F j, Y", strtotime($pesoDia->fecha)) }}</li>
				<li>{{ $pesoDia->peso }} kg</li>
				<li>{{ $pesoDia->grasa }} %</li>
				<li>{{ $pesoDia->musculo }} kg</li>
			</ul>
		@endforeach

			</div>
	@endif


		</div>
	</div>
@stop
