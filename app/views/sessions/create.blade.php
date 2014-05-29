@extends('layouts.main')

@section('content')
	
	<div class="row">
		<div class="large-6 large-centered columns">
			<div id="loginForm">
				<h1 class="title">Login</h1>
				{{ Form::open(['url' => URL::route('login')]) }}

					<input type="text" name="username" placeholder="Username">
					{{ errors_for('username', $errors) }}

					<input type="password" name="password" placeholder="Password">
					{{ errors_for('password', $errors) }}

					@if (Session::has('login_error'))
			              <span class="error">{{ Session::get('login_error') }}</span>
			        @endif

					<input type="checkbox" name="remember" id="remember">
					<label for="remember">Remember me?</label><br/>

					<input type="submit" value="Login" class="button">

				{{ Form::close() }}
			</div>
		</div>
	</div>

@stop	