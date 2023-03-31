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
    <link rel="stylesheet" href="{{ asset('css/main/login.css') }}" />

<body>
    <div id="app">
        <main class="py-4">
            <div id="app">
                @yield('content')
                @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
                @yield('script')
            </div>
        </main>
    </div>
    <!-- =========================
        SCRIPTS
    ============================== -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
