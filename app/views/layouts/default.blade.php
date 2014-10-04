<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css') }}
</head>
<body>
	@include('layouts.partials.nav')
	<div class='container'>
		@include('flash::message')

		@yield('content')
	</div>
	{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
	{{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
	<script>
    	$('#flash-overlay-modal').modal();
	</script>
</body>
</html>