@extends('layouts.default')


@section('content')

	<div class="row">

		<div class="col-md-12">

			<div class="page-header">
				<h1>Edit Athlete {{ $user->id }} <small>{{ $user->name . " " . $user->lastname }}</small></h1>
			</div>

		</div>

		
		<div class="col-md-4">

			@include('layouts.partials.errors')

		
			{{ Form::model($user, ['method' => 'patch', 'route' => ['users.update', $user->id]]) }}

			{{ Form::hidden('id',null) }}

			<div class="form-group">
				{{ Form::label('username', 'Username:') }}
				{{ Form::text('username', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control']) }}
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
				{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
			</div>

			{{ Form::close() }}
			

			{{ Form::model($user, ['method' => 'delete', 'route' => ['users.destroy', $user->id]]) }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			{{ Form::close() }}



		</div>
	</div>

@stop
