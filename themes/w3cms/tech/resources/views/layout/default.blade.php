<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="description" content="{{ __('Tech - Tech House IT Limited') }}">
	<meta property="og:title" content="{{ __('Tech - Tech House IT Limited') }}">
	<meta property="og:description" content="{{ __('Tech - Tech House IT Limited') }}">
	<meta property="og:image" content="">
	<meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    

	
	<!-- FAVICONS ICON -->
	@if(config('Site.favicon'))
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/configuration-images/'.config('Site.favicon')) }}">
    @else 
        <link rel="icon" type="image/png" sizes="32x32" href="{{ theme_asset('img/icon-3.png') }}">
    @endif
	
	<!-- PAGE TITLE HERE -->
	<title>{{ config('Site.title') ? config('Site.title') : __('Tech House IT Limited') }}</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="{{ theme_asset('bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ theme_asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ theme_asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ theme_asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ theme_asset('css/responsive.css') }}">


	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">

</head>
<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
        <div id="loader"></div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
	

		<!-- header-top -->
		@include('elements.header-top')
		<!-- header-top END -->

		<!-- header -->
		@include('elements.header')
		<!-- header END -->

			@yield('content')


		<!-- Footer -->
		@include('elements.footer')
		<!-- Footer END-->



	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="{{ theme_asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ theme_asset('js/jquery.min.js') }}"></script>
	<script src="{{ theme_asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ theme_asset('js/script.js') }}"></script>
</body>
</html>