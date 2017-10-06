<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <meta name="author" content="">

	    {{-- I want to add meta tag, so have to section meta at here --}}
	    @section('meta')
	    	{{-- expr --}}
	    @show

	   
	    <link rel="icon" href="../../favicon.ico">

	    <!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	    <!-- Custom styles for this template -->
	    <link href="css/blog.css" rel="stylesheet">
	    {{-- I want to add link, so have to section link at here --}}
	    @section('link')
	    	{{-- expr --}}
	    @show

	  

     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
     	@section('script')
     		{{-- expr --}}
     	@show
	    {{-- I want to add script, so have to section script at here --}}

     
    	<title>Welcome to my blog </title>
   
  	</head>

	<body>
		@include ('layouts.nav')
	    <div class="container">

	    	@include('layouts.header')

	        <div class="row">

	        	<div class="col-sm-8 blog-main">
	        		<div class="container">
	        			@yield('content')
	        		</div>

	          		@yield('paginator')
	        	</div><!-- /.blog-main -->

	        	@include('layouts.sidebar')

	      	</div><!-- /.row -->

	    </div><!-- /.container -->

		@include('layouts.footer')

	</body>
</html>
