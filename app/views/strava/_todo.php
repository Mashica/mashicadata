
/**
 * Strava
 * views/users/show.blade.php
 */

	@if($user->profile)
		@if($user->profile->strava_oauth_token == "") 

			@if($user->isCurrentUser())
			<hr>
			<p><a href="/strava"><img src="/img/ConnectWithStrava@2x.png" alt="Enlace con Strava" style="height:30px;" border="0"></a></p>
			@endif

		@else
			<strong>Strava</strong>
			<div><img src="{{ $strava_user['profile'] }}"></div>
			
			@foreach ($strava_user as $item)
			{{ $item . "<br>" }}
			@endforeach
			
		@endif

	@else

		@if($user->isCurrentUser())
		<hr>
		<p><a href="/strava"><img src="/img/ConnectWithStrava@2x.png" alt="Enlace con Strava" style="height:30px;" border="0"></a></p>
		@endif


	@endif
