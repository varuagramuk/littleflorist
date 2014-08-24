@extends('layouts.main')

@section('content')
	
	<div id='admin'>
		<h2>Add a new Vendor</h2><br/>

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

		{{ Form::open(array('url'=>'admin/vendors/create')) }}
		<p>
			{{ Form::label('firstname') }}
			{{ Form::text('firstname') }}
		</p>
		<p>
			{{ Form::label('lastname') }}
			{{ Form::text('lastname') }}
		</p>
		<p>
			{{ Form::label('username') }}
			{{ Form::text('username') }}
		</p>
		<p>
			{{ Form::label('password') }}
			{{ Form::password('password') }}
		</p>
		<p>
			{{ Form::label('address') }}
			{{ Form::textarea('address') }}
		</p>
		<p>
			{{ Form::label('email') }}
			{{ Form::text('email') }}
		</p>
		<p>
			{{ Form::label('primary phone') }}
			{{ Form::text('phone') }}
		</p>
		<p>
			{{ Form::label('secondary phone') }}
			{{ Form::text('phone2') }}
		</p>
		<p>
			{{ Form::label('delivery options') }}
			{{ Form::text('delivery options') }}
		</p>
		{{ Form::submit('Submit',array('class'=>'btn')) }}
		{{ Form::close() }}
	</div><!-- end admin -->
 
@stop