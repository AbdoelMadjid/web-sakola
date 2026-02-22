<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="{{ url('/') }}/">
    <title>@yield('title') | Web Sakola</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="web/assets/img/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,400i,500,700%7CAlegreya:400" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="web/assets/vendor/bootstrap/bootstrap.min.css">

    @yield('styles')

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="web/assets/css/styles.multipage-education.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="web/assets/css/custom.css">
</head>

<body>
    <main>
        @include('website.layouts.header')

        @yield('content')

        @hasSection('footer')
            @yield('footer')
        @else
            @include('website.layouts.footer')
        @endif

        @hasSection('go_to_top')
            @yield('go_to_top')
        @else
            @include('website.layouts.go-to-top')
        @endif
    </main>

    <!-- JS Global Compulsory -->
    <script src="web/assets/vendor/jquery/jquery.min.js"></script>
    <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="web/assets/vendor/popper.js/popper.min.js"></script>
    <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>

    @yield('scripts')

</body>

</html>
