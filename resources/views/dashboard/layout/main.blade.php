<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('public/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/jqvmap/dist/jqvmap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
        .suhu .box,
        .kelembapan .box
        {
            width: 25%;
            float: left;
        }
        .suhu .box .chart,
        .kelembapan .box .chart
        {
            position: relative;
            width: 110px;
            height: 110px;
            margin: 0 auto;
            text-align: center;
            font-size: 30px;
            line-height: 110px;
        }
        .suhu .box canvas,
        .kelembapan .box canvas
        {
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body class="Dberat ceksuhu">


    {{-- <span > --}}

    <!-- Left Panel -->
    @include('dashboard.layout.slidebar')
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    @include('dashboard.layout.header')
        <!-- /header -->



        <!-- Content-->
            <div class="content mt-3">
                @yield('container')
            </div>
            <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->

    <script src="{{ asset('public/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('public/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>


    <script src="{{ asset('public/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('public/assets/js/widgets.js') }}"></script>
    <script src="{{ asset('public/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('public/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>


</body>

</html>



















{{-- <form action="/logout" method="post">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form> --}}
