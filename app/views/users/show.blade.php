@extends('layouts.default')


@section('content')

	<div class="col-md-12">
	
	<h1>{{{ $user->name . " " . $user->lastname }}}</h1>
	
		@if($user->isCurrentUser())

			<p>{{ link_to_route('users.edit', 'edit', $parameters = array($user->username), $attributes = ['class' => 'btn btn-link btn-xs'])}}</p>

		@endif

		<hr>

	</div>
	<div class="col-md-4">

		<p><strong>Username:</strong> {{ $user->username }}</p>

		<p><strong>Email:</strong> {{ $user->email }}</p>

		@if($user->isCurrentUser())
	
			{{ "<p><strong>Password:</strong> ***** " . link_to_route('users.password.edit', 'Cambiar Password', $parameters = array($user->username),  ['class' => 'btn btn-default btn-xs']) . "</p>" }}
		
		@endif



		@if ($user->isactive <> 0)
			<p class="text-success">Active</p>
		@else
			<p class="text-danger">Not Active</p>
		@endif


@if($user->profile)

		<hr>

		{{ ($user->profile->tel != '') ? "<p><strong>Teléfono: </strong>". $user->profile->tel . "</p>" : "" }}
		
		{{ ($user->profile->cel != '') ? "<p><strong>Celular: </strong>". $user->profile->cel . "</p>" : "" }}


		{{ ($user->profile->bio != '') ? "<hr><p><strong>Biografía: </strong>". $user->profile->bio . "</p>" : "" }}


		@if($user->profile->address . $user->profile->colonia . $user->profile->city . $user->profile->state . $user->profile->country . $user->profile->cp != "")
			
			<hr>
			{{ ($user->profile->address != '') ? "<p><strong>Dirección: </strong>" . $user->profile->address . "</p>" : "" }}
			{{ ($user->profile->colonia) ? "<p><strong>Colonia: </strong>" . $user->profile->colonia . "</p>" : "" }}
			{{ ($user->profile->city != '') ? "<p><strong>Ciudad: </strong>" . $user->profile->city . "</p>" : "" }}
			{{ ($user->profile->state != '') ? "<p><strong>Estado: </strong>" . $user->profile->state . "</p>" : "" }}
			{{ ($user->profile->cp != '') ? "<p><strong>Código Postal: </strong>" . $user->profile->cp . "</p>" : "" }}
			{{ ($user->profile->country != '') ? "<p><strong>País: </strong>" . $user->profile->country . "</p>" : "" }}

		@endif

		@if($user->profile->birthday != '0000-00-00')
			<hr>
			<p><strong>Cumpleaños:</strong> {{ date("F j, Y", strtotime($user->profile->birthday)) . " (" . date_diff(date_create($user->profile->birthday), date_create('today'))->y . ")"}}</p>
		@endif
@endif



	</div>

	<div class="col-md-1"></div>
	<div class="col-md-7">
	
	@if($user->pesos->count() > 0)

		<div class="table-responsive">
		<table class="table table-hover table-condensed">

			<caption>Peso / Grasa / Músculo</caption>

			<thead>
				<tr>
					<th>Fecha</th>
					<th>Peso</th>
					<th>Grasa</th>
					<th>músculo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach ($user->pesos()->orderBy('fecha','desc')->get() as $pesoDia)
				<tr class="">
					<td>{{ date("F j, Y", strtotime($pesoDia->fecha)) }}</td>
					<td>{{ $pesoDia->peso }} kg</td>
					<td>{{ $pesoDia->grasa }} %</td>
					<td>{{ $pesoDia->musculo }} kg</td>
					<td>
						@if($user->isCurrentUser())
						{{ link_to_route('peso.edit', 'edit', $parameters = array($pesoDia->id), $attributes = ['class' => 'btn btn-link btn-xs']) }}
						@endif
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		</div>
	@endif

	</div>

@stop