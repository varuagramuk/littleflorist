@extends('layouts.main')

@section('content')

<div id='newaccount'>
	<h1>Create new account</h1>

	@if($errors->has())
		<div id='form-errors'>
			<p>Following errors occurred : </p>
			<ul>
				@foreach ($errors->all() as $error) 
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><!-- end form errors-->
	@endif

	{{ Form::open(array('url'=>'/users/create')) }}	
	<p>
		{{ Form::label('Firstname') }}
		{{ Form::text('firstname') }}
	</p>
	<p>
		{{ Form::label('Lastname') }}
		{{ Form::text('lastname') }}
	</p>
	<p>
		{{ Form::label('Username') }}
		{{ Form::text('username') }}
	</p>
	<p>
		{{ Form::label('Password') }}
		{{ Form::password('password') }}
	</p>
	<p>
		{{ Form::label('Address') }}
		{{ Form::textarea('address') }}
	</p>
	<p>
		{{ Form::label('E-mail') }}
		{{ Form::text('email') }}
	</p>
	<p>
		{{ Form::label('Phone') }}
		{{ Form::text('phone') }}
	</p>
	<p>
		{{ Form::label('Type') }}
		{{ Form::select('isVendor', array('0'=>'User','1'=>'Vendor')) }}
	</p>
	{{ Form::submit('create account') }}
	{{ Form::close() }}
</div>


@stop