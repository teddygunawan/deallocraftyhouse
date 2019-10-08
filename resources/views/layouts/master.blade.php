<html>
<head>
    <title>Deallo Craft House</title>
    
    @yield('Header')
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
    <script type="text/javascript" src="{{URL::asset('js/respond.min.js')}}"></script>
</head>

@include('layouts.header')

<body>
    <div id="all">
        @yield('content')
    </div>

    @include('layouts.footer')

    <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{URL::asset('js/scrolla.jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.cookie.js')}}"></script>
    <script src="{{URL::asset('js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/modernizr.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{URL::asset('js/front.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/sweetalert2.min.js')}}"></script>
    @yield('custom-script')

</body>
</html>