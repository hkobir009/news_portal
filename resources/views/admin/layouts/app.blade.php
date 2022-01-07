<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/SolaimanLipi.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
</head>
<body>

    @include('admin.layouts.header')
    @include('admin.layouts.sidebar_menu')


    @yield('content')


    <!-- JavaScript Plugins -->
    <script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('js/admin_custom.js')}}"></script>

</body>
</html>