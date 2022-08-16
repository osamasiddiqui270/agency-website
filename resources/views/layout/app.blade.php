<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Pixlab - Creative Agency HTML Template</title>
	<link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}" type="image/png">
	<link rel="stylesheet" href="{{ asset('/css/default.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}"> </head>
<body>

    @include('layout.includes.side-panel')
    @include('layout.includes.header')
    @yield('content')
	@include('layout.includes.footer')


	<a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
	<script src="{{ asset('vendor/jquery-3.6.0.min.js') }}" ></script>
	<script src="{{ asset('vendor/popper/popper.min.js') }}" ></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" ></script>
	<script src="{{ asset('vendor/slick/slick.min.js') }}" ></script>
	<script src="{{ asset('vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}" ></script>
	<script src="{{ asset('vendor/isotope.min.js') }}" ></script>
	<script src="{{ asset('vendor/imagesloaded.min.js') }}" ></script>
	<script src="{{ asset('vendor/jquery.counterup.min.js') }}" ></script>
	<script src="{{ asset('vendor/jquery.waypoints.js') }}" ></script>
	<script src="{{ asset('vendor/nice-select/js/jquery.nice-select.min.js') }}" ></script>
	<script src="{{ asset('vendor/wow.min.js') }}" ></script>
	<script src="{{ asset('vendor/parallax.min.js') }}" ></script>
	<script src="{{ asset('js/theme.js') }}" ></script>
</body>

</html>