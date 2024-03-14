<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
    <style>
        body {
            background-image: url("{{ asset('images/background.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .page{
            margin-left: 210px;
        }
    </style>
</head>

<body>
    {{-- @include('include.sidenav') --}}

    <div class="page">
        @yield('content')
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </div>
</body>

</html>
