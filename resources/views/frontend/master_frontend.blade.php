<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	@yield('metaTags')
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('css/core-6a1c2ced1d.min.css') }}" rel="stylesheet">
	<link href="{{ url('css/app-3e9bd7d326.min.css') }}" rel="stylesheet">

	<link rel="icon" type="image/png" href="{{ url('image/fiasteem.png') }}">
	@yield('stylesheet')
	@yield('title')
	<title>FiaSteem</title>
</head>
<body>

	{{-- {{dd(Auth::user()->unreadNotificationsSingle([2,3,4]))}} --}}
	{{-- @include('frontend.partials._messages') --}}
	@include('frontend.partials._header')
		
	<div class="" id="app">
		@yield('content')
	</div>
{{-- 	@if(Auth::check())
		@include('frontend.partials._floatingmenu')
		@include('frontend.partials.blogfloating')
	@endif --}}
	@include('frontend.partials._footer')
	{{-- @if(Auth::user())
		@include('frontend.partials._quicksidebar')
	@endif --}}
{{-- 	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=137292706911714';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script> --}}

	<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
	<script>


		$(window).ready(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
	</script>
	@yield('javascript')    
</body>
</html>
