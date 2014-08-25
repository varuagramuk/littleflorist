@extends('layouts.main')

@section('content')

	<div id='signin'>
		{{ Form::open(array('url'=>'/users/signin')) }}
		{{ Form::label('Email') }}
		{{ Form::text('email') }}

		{{ Form::label('Password') }}
		{{ Form::password('password') }}

		{{ Form::button('Sign In',array('type'=>'submit','class'=>'btn')) }}
		{{ Form::close() }}
	</div>

	<div class='signup'>
		{{ HTML::link('/users/newaccount','Create new account') }}
	</div>
@stop
