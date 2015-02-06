@extends('layouts.default')


@section('content')

		<h1>Strava</h1>	
		


			{{ Form::open(['url' => 'https://www.strava.com/oauth/token', 'method' => 'POST']) }}

			{{ Form::hidden('code', $code) }}
			{{ Form::hidden('client_id', '4647') }}
			{{ Form::hidden('client_secret', '3d23d4ade47380c5b4180fc68993e1e7785d4b79') }}


			<div class="form-group">
				{{ Form::submit('Connect to Strava', ['class' => 'btn btn-primary']) }}
			</div>

			{{ Form::close() }}

@stop
