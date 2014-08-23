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
		{{ Form::submit('Submit',array('class'=>'btn')) }}
		{{ Form::close() }}
	</div><!-- end admin -->
 
@stop