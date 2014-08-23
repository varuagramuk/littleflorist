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
	{{ HTML::script('js/validate.min.js') }}
</body>
