<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/front/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <style>
        @font-face{
            font-family: 'Philosopher';
            src: url('/front/fonts/Philosopher.woff') format('woff');
        }
    </style>
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('/front/css/all.css') }}">
    <!-- <link rel="stylesheet" href="{{ url('/front/css/responsive.css') }}"> -->


</head>

<body>

    @include('front.navbar')

    @include('front.header')

    @include('front.messages')

    @yield('content')


    @include('front.footer')

    <!-- JS here -->
    <script src="{{ url('/front/js/all.js') }}"></script>


    <!--contact js-->
    <script src="{{ url('/front/js/jquery.validate.min.js') }}"></script>
    <script src="{{ url('/front/js/mail-script.js') }}"></script>


    <script src="{{ url('/front/js/main.js') }}"></script>

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }

        });

    </script>
</body>

</html>
