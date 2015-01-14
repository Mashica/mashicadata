@extends('layouts.reminder')


@section('content')
            <h1 class="cover-heading">¿Se te olvidó la contraseña?</h1>
            
            <p class="lead">¿De nuevo?</p>

            <p class="lead">Por esto, no se nos permite tener cosas bonitas. Hay que tomar responsabilidad para las cosas que tenemos. Cuida el agua. Cuida tu contaseña.</p>

			<p class="lead">

			<div class="form-signin">
			
			@if(Session::has('error'))
				<div class="alert alert-danger">{{ Session::get('error') }}</div>
			@elseif(Session::has('status'))
				<div class="alert alert-success">{{ Session::get('status') }}</div>
			@endif

			</div>



			{{ Form::open(['action' => 'RemindersController@postRemind', 'class' => 'form-signin']) }}

				{{ Form::label('email', 'Email:', ['class' => 'sr-only']) }}
				{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'autofocus' => 'autofocus', 'required' => 'required']) }}

				{{ Form::submit('Restablecer Contraseña', ['class' => 'btn btn-lg btn-primary btn-block']) }}

			{{ Form::close() }}
			

			</p>




@stop
