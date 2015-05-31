<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Referencing Css and js files -->
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
		{{ HTML::style('css/templatemo-style.css') }}

		{{ HTML::script('js/jquery.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/typed.js') }}
		{{ HTML::script('js/custom.js') }}
	</head>
	<body id="top">

		<!-- start header -->
		@include('includes.header')
		<!-- end header -->

		<!-- start navigation bar -->
		@include('includes.navbar')
		<!-- end navigation bar -->

		<!-- start content -->
		@yield('content')
		<!-- end content -->

		<!-- start footer -->
		@include('includes.footer')
		<!-- end footer -->
	</body>
</html>
