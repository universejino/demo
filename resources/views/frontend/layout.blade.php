<!DOCTYPE html>
<html lang="en">
@include('frontend.meta')
<body> 
	<div id="preloader">
		<span class="margin-bottom"><img src="{!! asset('frontend/images/loader.gif') !!}" alt="" /></span>
	</div>
@include('frontend.header')
@include('frontend.slider')
@yield('content')
@include('frontend.footer')
@include('frontend.scripts')
</body>
</html>
