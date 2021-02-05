<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ url('/back/img/favicon.png') }}" type="image/png">
    <title>SteakShop Restaurant</title>

    <link rel="stylesheet" href="{{ url('/back/css/all.css') }}">

    <!-- chosen select ctyles -->
    <link rel="stylesheet" href="{{url('/plugin/chosen/docsupport/prism.css')}}">
    <link rel="stylesheet" href="{{url('/plugin/chosen/chosen.css')}}">
    <!-- chosen select styles  End-->

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
        {!!\File::get(base_path('vendor\unisharp\laravel-filemanager\public\js\stand-alone-button.js')) !!}
        var route_prefix = "{{ url('/laravel-filemanager') }}";
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });

    </script>

    <!-- chosen-select scripts start -->
    <script src="{{url('/plugin/chosen/docsupport/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{url('/plugin/chosen/chosen.jquery.js')}}" type="text/javascript"></script>
    <script src="{{url('/plugin/chosen/docsupport/prism.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{url('/plugin/chosen/docsupport/init.js')}}" type="text/javascript" charset="utf-8"></script>
    <!-- chosen-select scripts ٍدی -->

</body>

</html>
