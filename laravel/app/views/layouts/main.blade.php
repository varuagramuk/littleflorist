<!DOCTYPE html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Little Florist</title>
	<meta name='description' content="">
	<meta name='viewport' content="width=device-width">

	{{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>
	<div id='wrapper'>
		<header>
			<section id='top-panel'>
				<menu>	
					@if(Auth::check())
						<li>{{ HTML::link('users/signout','Sign Out') }}</li>
						@if($vendor)
							<li>Add Product</li>
							<li>My Account</li>
							<li>Orders</li>
						@endif
						@if($super)
							<li>Vendor list</li>
							<li>Products list</li>
							<li>Add Product</li>
							<li>Add Categories</li>
						@endif
					@else
						<li>{{ HTML::link('users/signin','Sign In') }}</li>
						<li>{{ HTML::link('users/newaccount','Sign Up') }}</li>

					@endif

					
				</menu>
			</section> <!-- end top panel -->
		</header>
		<section id='main-content' class='clearfix'>
			
			@if(Session::has('message'))
				<p class='alert'>
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					{{ Session::get('message') }}
				</p>
			@endif

			@yield('content')
		</section><!-- end main content -->
		<footer>
			
		</footer>	
	</div> <!-- end wrapper -->
	{{ HTML::script('js/jquery-1.8.3.js') }}
	{{ HTML::script('js/jquery.jgrowl.js') }}
	{{ HTML::script('js/jquery.validate.min.js') }}
</body>
