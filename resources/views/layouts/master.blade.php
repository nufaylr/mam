<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body style='background-color:#F7F7F9; background-image: url("/images/background.png");'>
	<div class="container">
	    <div id="c-content" class="row">
	        @yield('content')
	    </div>
	    <div id="c-footer" class="row">
	        @include('includes.footer')
	    </div>
	</div>
</body>
</html>