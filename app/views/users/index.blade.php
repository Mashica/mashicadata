@extends('layouts.default')


@section('content')

	@if ($users->count())


		<h1>All Mashica Athletes</h1>	
		
		@foreach ($users as $user)
			<li>{{ link_to("/users/{$user->username}", $user->name . " " . $user->lastname) }}</li>
		@endforeach

	@else

		<h3>There are no users</h3>

	@endif

@stop
