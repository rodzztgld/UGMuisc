@extends('layouts.main')

@section('content')
	
	<div class="row">
		<div class="large-6 large-centered columns">
			<div id="registerForm">
				<h1 class="title">Register</h1>
				{{ Form::open(['url' => URL::route('register')]) }}

					<input type="text" name="username" placeholder="Username">
					{{ $errors->first('username') }}

					<input type="email" name="email" placeholder="Email Address">
					{{ $errors->first('email') }}

					<input type="password" name="password" placeholder="Password">
					{{ $errors->first('password') }}

					<input type="password" name="confirm_password" placeholder="Confirm Password">
					{{ $errors->first('confirm_password') }}<br/>

					<input type="submit" value="Register" class="button">

				{{ Form::close() }}
			</div>
		</div>
	</div>

@stop