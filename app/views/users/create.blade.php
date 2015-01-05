@extends('layouts.default')


@section('content')

	<div class="row">

		<div class="col-md-12">

			<div class="page-header">
				<h1>New Athlete</h1>
			</div>

		</div>

		
		<div class="col-md-4">

			@include('layouts.partials.errors')

		
			{{ Form::open(['route' => 'users.store']) }}



			<div class="form-group">
				{{ Form::label('username', 'Username:') }}
				{{ Form::text('username', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('password_confirmation', 'Password Confirmation:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('lastname', 'Lastname(s):') }}
				{{ Form::text('lastname', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('isactive', 'Currently Active: ') }}
				{{ Form::checkbox('isactive','1',true) }}
			</div>

			<div class="form-group">
				{{ Form::label('isinvisible', 'Hidden: ') }}
				{{ Form::checkbox('isinvisible','1',false) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
			</div>

			{{ Form::close() }}
			
@stop
