<!DOCTYPE html>
<html lang="en">

<head>
	<title>INTERRAPPI</title>
	<meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" />

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/gsdk-bootstrap-wizard.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
	<link rel="stylesheet" href="{{asset('css/main/style.css')}}" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet" type="text/css" />

	<!-- FONT AWESOME Font -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet"
		type="text/css" />
</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
    <div id="app">
        <main class="py-4">
            <div id="app">
                @yield('content')
                @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
                @yield('script')
            </div>
        </main>
    </div>
    <!-- =========================
        SCRIPTS   
    ============================== -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/jquery.parallax.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <!--  Plugin for the Wizard -->
    <script src="{{asset('assets/js/gsdk-bootstrap-wizard.js')}}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
