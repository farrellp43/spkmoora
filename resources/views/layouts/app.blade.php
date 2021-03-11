<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>moora &middot; @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ url('img/3.png') }}" type="image/png">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ url('modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ url('app/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('app/css/components.css') }}">

    @stack('scripts')

</head>

<body>
    @yield('content')

    {{-- Script JS --}}
    <script src="{{ url('modules/jquery.min.js') }}"></script>
    <script src="{{ url('modules/popper.js') }}"></script>
    <script src="{{ url('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('app/js/stisla.js') }}"></script>
    <script src="{{ url('app/js/scripts.js') }}"></script>
    <script src="{{ url('app/js/custom.js') }}"></script>
</body>

</html>