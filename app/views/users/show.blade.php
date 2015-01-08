@extends('layouts.default')


@section('content')

	
	<h1>{{ $user->name . " " . $user->lastname }}</h1>

	<p>{{ link_to_route('users.edit', 'edit', $parameters = array($user->username), $attributes = ['class' => 'btn btn-default btn-xs']) }}</p>
	
	<hr>

	<p><strong>Username:</strong> {{ $user->username }}</p>

	<p><strong>Password:</strong> ***** {{ link_to('#', 'Cambiar Password', ['class' => 'btn btn-default btn-xs']) }}</p>

	<p><strong>Email:</strong> {{ $user->email }}</p>

	<!-- <p><strong>Fecha Alta:</strong> {{ date("F j, Y", strtotime($user->created_at)) }}</p> -->

	@if ($user->isactive <> 0)
		<p class="text-success">Active</p>
	@else
		<p class="text-danger">Not Active</p>
	@endif

@stop