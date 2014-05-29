@extends('layouts.main')

@section('content')
	
	<div class="row">
		<div class="large-6 large-centered columns">
			<div id="loginForm">
				<h1 class="title">Login</h1>
				{{ Form::open(['url' => URL::route('login')]) }}

					<input type="text" name="username" placeholder="Username">
					{{ $errors->first('username') }}

					<input type="password" name="password" placeholder="Password">
					{{ $errors->first('password') }}

					<input type="submit" value="Login" class="button">

				{{ Form::close() }}
			</div>
		</div>
	</div>

@stop	