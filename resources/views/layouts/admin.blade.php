<!DOCTYPE html>
<html lang="en">

<head>
    <title>INTERRAPPI</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/main/dashboard.css') }}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

</head>


<body class="home">
    <div id="app">
        <main>
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
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
