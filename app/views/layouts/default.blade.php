<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Management</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/jquery.dataTables.css') }}
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	{{ HTML::script('js/DataTables1_3.js')  }}
	{{ HTML::script('js/parsley.js') 		}}
	{{ HTML::script('js/parsley.remote.js') }}
	{{ HTML::script('js/modules/exporting.js') 	}}
	<script src="//cdn.ckeditor.com/4.4.6/standard/ckeditor.js"></script>
	{{ HTML::script('js/geoPosition.js') 	}}
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
</head>
<body>
@include('layouts.navigation_header')

	<h5>{{ 'Hello Welcome: '. Auth::user()->username }}</h5>
	<h5>{{ link_to('sessions/destroy','Logout?') }}</h5>
	<div class="jumbotron">
		@yield('content')
	</div>
	@yield('footer')
	
</body>
</html>