<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ url('/back/img/favicon.png') }}" type="image/png">
    <title>SteakShop Restaurant</title>


    <link rel="stylesheet" href="{{ url('/back/css/all.css') }}">

</head>

<body class="d-felx justify-content-center">

    <!--================ Start Header Menu Area =================-->
    @include('back.sidebar')
    <!--================ End Header Menu Area =================-->
    @include('back.header')

    @include('back.messages')

    @yield('content')
    <!--================ Start Footer Area =================-->
    @include('back.footer')
    <!--================ end Footer Area =================-->
    </div>

    <!-- Optional JavaScript -->

    <script src="{{ url('/back/js/all.js') }}"></script>
    <script>
        {!! \File::get(base_path('vendor\unisharp\laravel-filemanager\public\js\stand-alone-button.js')) !!}
        var route_prefix = "{{url('/laravel-filemanager')}}";
            $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>

</body>

</html>
