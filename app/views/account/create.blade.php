@extends('layouts.main')

@section('content')
	
	<div class="row">
		<div class="large-6 large-centered columns">
			<div id="registerForm">
				<h1 class="title">Register</h1>
				{{ Form::open(['url' => URL::route('register')]) }}

					<input type="text" name="username" placeholder="Username">
					{{ errors_for('username', $errors) }}

					<input type="email" name="email" placeholder="Email Address">
					{{ errors_for('email', $errors) }}

					<input type="password" name="password" placeholder="Password">
					{{ errors_for('password', $errors) }}

					<input type="password" name="confirm_password" placeholder="Confirm Password">
					{{ errors_for('confirm_password', $errors) }}<br/>

					<input type="submit" value="Register" class="button">

				{{ Form::close() }}
			</div>
		</div>
	</div>

@stop