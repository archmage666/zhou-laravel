<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

@yield('content')

<!-- Js -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>
