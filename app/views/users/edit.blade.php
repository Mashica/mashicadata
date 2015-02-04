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

		
			{{ Form::model($user, ['method' => 'patch', 'route' => ['users.update', $user->username]]) }}

			{{ Form::hidden('id',null) }}

			<div class="form-group">
				{{ Form::label('username', 'Username:') }}
				{{ Form::text('username', null, ['class' => 'form-control']) }}
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
				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email', null, ['class' => 'form-control']) }}
			</div>



			<div class="form-group">
				{{ Form::label('tel', 'Teléfono:') }}
				{{ Form::text('profile[tel]', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('cel', 'Celular:') }}
				{{ Form::text('profile[cel]', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('address', 'Dirección:') }}
				{{ Form::text('profile[address]', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('colonia', 'Colonia:') }}
				{{ Form::text('profile[colonia]', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('city', 'Ciudad:') }}
				{{ Form::text('profile[city]', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('state', 'Estado:') }}
				{{ Form::text('profile[state]', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('cp', 'Código Postal:') }}
				{{ Form::text('profile[cp]', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('country', 'País:') }}
				{{ Form::select('profile[country]', array('MX' => 'México', 'ES' => 'España', 'US' => 'United States', 'CR' => 'Costa Rica'), null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('birthday', 'Birthday:') }}
				{{ Form::text('profile[birthday]', null, ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD']) }}
			</div>

			<div class="form-group">
				{{ Form::label('bio', 'Bio:') }}
				{{ Form::textarea('profile[bio]', null, ['class' => 'form-control']) }}
			</div>





		@if($user->canCreateUser())
			<div class="form-group">
				<input type="hidden" name="isactive" id="isactive" value="0">
				{{ Form::label('isactive', 'Currently Active: ') }}
				{{ Form::checkbox('isactive','1',true) }}
			</div>

		
			<div class="form-group">
				<input type="hidden" name="isinvisible" id="isinvisible" value="0">
				{{ Form::label('isinvisible', 'Hidden: ') }}
				{{ Form::checkbox('isinvisible','1',false) }}
			</div>
		@else
			<div class="form-group">
			{{ Form::hidden('isactive',$user->isactive) }}
			{{ Form::hidden('isinvisible',$user->isinvisible) }}
			</div>
		@endif



		@if(Auth::user()->hasRole('super') || Auth::user()->id == 1)

			<div class="form-group">
			
			{{ Form::label('role[]', 'Roles:') }}

			@foreach (Role::get() as $role) 
				
				<br>{{ Form::checkbox('role[]', $role->id, in_array($role->id, $userRoles)) }} {{{ $role->name }}}

			@endforeach	
			
			</div>

		@endif




		<hr>

			<div class="form-group">
				{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
			</div>

			{{ Form::close() }}
			

			
		@if($user->canCreateUser())
			{{ Form::model($user, ['method' => 'delete', 'route' => ['users.destroy', $user->id]]) }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			{{ Form::close() }}
		@endif


		</div>
	</div>

@stop
