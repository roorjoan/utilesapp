<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utils</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>

    </style>
    @yield('styles')
</head>

<body>
    <nav class="nav justify-content-center">
        <a class="nav-link active" href="{{ route('utils.index') }}">INICIO</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
