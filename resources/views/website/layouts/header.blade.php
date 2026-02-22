<header id="js-header" class="u-header">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="g-bg-main">
            <div class="container g-py-5">
                <ul class="list-inline d-flex align-items-center g-mb-0">
                    <li class="list-inline-item d-none d-lg-inline-block">
                        <a class="u-link-v5 g-brd-around g-brd-white-opacity-0_2 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 g-rounded-20 text-uppercase g-px-20 g-py-10"
                            href="{{ route('navbar.page', ['page' => 'apply']) }}">Apply for Fall intake</a>
                    </li>

                    <!-- Language -->
                    @include('website.layouts.topbar.language')
                    <!-- End Language -->

                    <!-- Jump To -->
                    @include('website.layouts.topbar.jump-to')
                    <!-- End Jump To -->

                    <!-- Links -->
                    @include('website.layouts.topbar.link')
                    <!-- End Links -->

                    <!-- Search -->
                    @include('website.layouts.topbar.search')
                    <!-- End Search -->
                </ul>
            </div>
        </div>
        <!-- End Topbar -->

        <div class="container">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-lg g-px-0 g-py-5 g-py-0--lg">
                <!-- Logo -->
                <a class="navbar-brand g-max-width-170 g-max-width-200--lg"
                    href="{{ route('navbar.page', ['page' => 'index']) }}">
                    <img class="img-fluid g-hidden-lg-down" src="web/assets/img/logo/logo.png" alt="Logo">
                    <img class="img-fluid g-width-80 g-hidden-md-down g-hidden-xl-up"
                        src="web/assets/img/logo/logo-mini.png" alt="Logo">
                    <img class="img-fluid g-hidden-lg-up" src="web/assets/img/logo/logo.png" alt="Logo">
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0" type="button"
                    aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse"
                    data-target="#navBar">
                    <span class="hamburger hamburger--slider g-px-0">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                @include('website.layouts.navbar')
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
