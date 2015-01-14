@extends('layouts.reminder')


@section('content')
    <h1 class="cover-heading">Nueva Contraseña</h1>
    
    <p class="lead">Por favor, rellena el formulario para restablecer tu contraseña.</p>

	<p>

		<div>
		
		@if(Session::has('error'))
			<div class="alert alert-danger">{{ Session::get('error') }}</div>
		@elseif(Session::has('status'))
			<div class="alert alert-success">{{ Session::get('status') }}</div>
		@endif

		</div>


		{{ Form::open(['action' => 'RemindersController@postReset', 'class' => 'form-horizontal']) }}
			{{ Form::hidden('token', $token) }}

			<div class="form-group">
				{{ Form::label('email', 'Email:', ['class' => 'col-sm-2 control-label']) }}
				<div class="col-sm-8">
					{{ Form::email('email', null, ['class' => 'form-control', 'autofocus' => 'autofocus', 'required' => 'required']) }}
				</div>
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Contraseña:', ['class' => 'col-sm-2 control-label']) }}
				<div class="col-sm-8">
					{{ Form::password('password', ['class' => 'form-control']) }}
				</div>
			</div>
			<div class="form-group">
				{{ Form::label('password_confirmation', 'Confirmación:', ['class' => 'col-sm-2 control-label']) }}
				<div class="col-sm-8">
					{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-8">
				{{ Form::submit('Restablecer Contraseña', ['class' => 'btn btn-primary btn-block']) }}
				</div>
			</div>
		{{ Form::close() }}
		
	</p>

@stop
