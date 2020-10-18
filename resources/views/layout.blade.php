<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" src='../css/app.css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        
        <h5 class="my-0 mr-md-auto font-weight-normal">Laravel Blog</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('home') }}">Home</a>
            <a class="p-2 text-dark" href="{{ route('leagues.index') }}">Leagues</a>
            <a class="p-2 text-dark" href="{{ route('leagues.create') }}">Contact</a>
            <a class="p-2 text-dark" href="{{ route('login') }}">Login</a>
            <a class="p-2 text-dark" href="{{ route('register') }}">Register</a>
        </nav>
    </div>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>