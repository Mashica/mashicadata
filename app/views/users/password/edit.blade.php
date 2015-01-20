@extends('layouts.default')


@section('content')

	<div class="row">

		<div class="col-md-12">

			<div class="page-header">
				<h1>Edit Athlete password <small>{{ $user->name . " " . $user->lastname }}</small></h1>
			</div>

		</div>

		
		<div class="col-md-4">

			@include('layouts.partials.errors')

		
			{{ Form::model($user, ['route' => ['users.password.update', $user->id]]) }}

			{{ Form::hidden('id',null) }}

			<div class="form-group">
				{{ Form::label('current_password', 'Current Password:') }}
				{{ Form::password('current_password', ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'New Password:') }}
				{{ Form::password('password', ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('password_confirmation', 'New Password Confirmation:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
			</div>


			<div class="form-group">
				{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
			</div>

			{{ Form::close() }}
			

		</div>
	</div>

@stop
