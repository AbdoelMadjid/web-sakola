<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @php
        $isId = str_starts_with(app()->getLocale(), 'id');
        $route = request()->route();
        $routeName = $route?->getName();

        $pageKey = match ($routeName) {
            'navbar.index' => 'index',
            'navbar.page' => (string) ($route?->parameter('page') ?? ''),
            'login', 'register', 'password.request', 'password.email', 'password.reset', 'password.store' => 'signin',
            default => '',
        };

        $titleMap = [
            'index' => [
                'id' => 'Beranda Pendidikan',
                'en' => 'Education Home',
            ],
            'programs' => [
                'id' => 'Program Pendidikan',
                'en' => 'Education Programs',
            ],
            'future-students' => [
                'id' => 'Calon Siswa',
                'en' => 'Future Students',
            ],
            'current-students' => [
                'id' => 'Siswa Saat Ini',
                'en' => 'Current Students',
            ],
            'faculty-and-staff' => [
                'id' => 'Fakultas dan Staf',
                'en' => 'Faculty and Staff',
            ],
            'events' => [
                'id' => 'Acara Pendidikan',
                'en' => 'Education Events',
            ],
            'alumni' => [
                'id' => 'Alumni',
                'en' => 'Alumni',
            ],
            'campus-life' => [
                'id' => 'Kehidupan Kampus',
                'en' => 'Campus Life',
            ],
            'research' => [
                'id' => 'Riset Pendidikan',
                'en' => 'Education Research',
            ],
            'apply' => [
                'id' => 'Pendaftaran',
                'en' => 'Apply',
            ],
            'contacts' => [
                'id' => 'Kontak',
                'en' => 'Contacts',
            ],
            'help' => [
                'id' => 'Pusat Bantuan',
                'en' => 'Help Center',
            ],
            'signin' => [
                'id' => 'Masuk',
                'en' => 'Sign In',
            ],
        ];

        $defaultTitle = $isId ? 'Pendidikan' : 'Education';
        $pageTitle = $titleMap[$pageKey][$isId ? 'id' : 'en'] ?? $defaultTitle;
        $suffixTitle = $isId ? 'Unify - Template Website Responsif' : 'Unify - Responsive Website Template';
        $resolvedTitle = $pageTitle . ' | ' . $suffixTitle;
    @endphp
    <base href="{{ url('/') }}/">
    <title>{{ $resolvedTitle }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="shortcut icon" href="web/assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,400i,500,700%7CAlegreya:400" rel="stylesheet">

    <link rel="stylesheet" href="web/assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="web/assets/vendor/animate.css">
    <link rel="stylesheet" href="web/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="web/assets/vendor/hamburgers/hamburgers.min.css">

    <link rel="stylesheet" href="web/assets/css/styles.multipage-education.css">
    <link rel="stylesheet" href="web/assets/css/custom.css">

    @stack('styles')
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

    <script src="web/assets/vendor/jquery/jquery.min.js"></script>
    <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="web/assets/vendor/popper.js/popper.min.js"></script>
    <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <script src="web/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

    <script src="web/assets/js/hs.core.js"></script>
    <script src="web/assets/js/components/hs.header.js"></script>
    <script src="web/assets/js/helpers/hs.hamburgers.js"></script>
    <script src="web/assets/js/components/hs.dropdown.js"></script>
    <script src="web/assets/js/components/hs.go-to.js"></script>

    <script src="web/assets/js/custom.js"></script>

    @stack('scripts')
</body>
</html>
