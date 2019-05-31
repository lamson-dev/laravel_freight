<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{asset('partner-dashboard/css/fontawesome.min.css')}}">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{asset('partner-dashboard/css/bootstrap.min.css')}}">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{asset('partner-dashboard/css/templatemo-style.css')}}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <!-- nave bar -->
        @include('Vehicle.components.header')
        @yield('index-section-content')
        @yield('vehicle-section-content')
        @yield('account-section-content')
        @yield('add-vehicle-section-content')
        @yield('edit-section-content')
        @yield('add-vehicle-type-section-content')
        <!-- footer -->
        @include('Vehicle.components.footer')
    </div>

    <script src="{{asset('partner-dashboard/js/jquery-3.3.1.min.js')}}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{asset('partner-dashboard/js/moment.min.js')}}"></script>
    <!-- https://momentjs.com/ -->
    <script src="{{asset('partner-dashboard/js/Chart.min.js')}}"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="{{asset('partner-dashboard/js/bootstrap.min.js')}}"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="{{asset('partner-dashboard/js/tooplate-scripts.js')}}"></script>

    @yield('index-script')
    @yield('product-script')
</body>

</html>
