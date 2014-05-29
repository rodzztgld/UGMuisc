@extends('layouts.main')

@section('content')
	
	<h1>Welcome {{ Auth::user()->username }}</h1>

@stop