<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6.3/multipage/education/page-signin-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 13:34:18 GMT -->

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Multipage - Education Signin Page | Unify - Responsive Website Template</title>

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

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="web/assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="web/assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="web/assets/vendor/animate.css">
    <link rel="stylesheet" href="web/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="web/assets/vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="web/assets/css/styles.multipage-education.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="web/assets/css/custom.css">
</head>

<body>
    @php
        $authMode = $authMode ?? 'signin';
    @endphp
    <main>
        <!-- Header -->
        @include('website.layouts.header')
        <!-- End Header -->

        <!-- Signin Form -->
        <div class="g-bg-img-hero" style="background-image: url(web/assets/include/svg/svg-bg2.svg);">
            <div class="container g-pt-100 g-pb-100 g-pb-130--lg">
                <div class="g-pos-rel">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Heading -->
                            <div class="g-mb-40">
                                <h2 class="h1 mb-3">Sign in to Unify</h2>
                                <p>By signing in you will be authorized to access your applications and web sites that
                                    use the Sign in Service. Use is subject to but not limited to the policies and
                                    guidelines listed below in <a href="#">Policies and guidelines</a>.</p>
                            </div>
                            <!-- End Heading -->
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-6 col-lg-5 order-md-2 g-pos-abs--md g-top-0 g-right-0">
                            <!-- Contact Form -->
                            <!-- Signin -->
                            <div id="signin">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                                        @if ($authMode === 'signin' && session('status'))
                                            <div class="alert alert-success g-mb-20">{{ session('status') }}</div>
                                        @endif
                                        @if ($authMode === 'signin' && $errors->any())
                                            <div class="alert alert-danger g-mb-20">{{ $errors->first() }}</div>
                                        @endif

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">Email</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-education-166 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="email" name="email" value="{{ old('email') }}"
                                                    placeholder="john@gmail.com" required autofocus
                                                    autocomplete="username">
                                            </div>
                                        </div>

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">Password</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-finance-135 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="password" name="password" placeholder="*********" required
                                                    autocomplete="current-password">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="g-color-text-light-v1 g-font-size-default"
                                                id="forgot-password-link" href="{{ route('password.request') }}">Forgot
                                                Password?</a>
                                            <button type="submit"
                                                class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7">Signin</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="text-center g-pt-30">
                                    <p class="g-color-text-light-v1 g-font-size-default mb-0">Do not have an
                                        account? <a class="g-font-size-default" id="signup-link"
                                            href="{{ route('register') }}">Create Account</a></p>
                                </div>
                            </div>
                            <!-- End Signin -->

                            <!-- Signup -->
                            <div id="signup" style="display: none;">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                                        @if ($authMode === 'signup' && $errors->any())
                                            <div class="alert alert-danger g-mb-20">{{ $errors->first() }}</div>
                                        @endif

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">Full name</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-transparent g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-finance-067 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="text" name="name" value="{{ old('name') }}"
                                                    placeholder="John Doe" required autocomplete="name">
                                            </div>
                                        </div>

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">Email</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-education-166 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="email" name="email" value="{{ old('email') }}"
                                                    placeholder="john@gmail.com" required autocomplete="username">
                                            </div>
                                        </div>

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">Password</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-finance-135 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="password" name="password" placeholder="*********" required
                                                    autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">Confirm
                                                Password</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-real-estate-056 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="password" name="password_confirmation"
                                                    placeholder="*********" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <button type="submit"
                                                class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7 ml-auto">Signup</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="text-center g-pt-30">
                                    <p class="g-color-text-light-v1 g-font-size-default mb-0">Already have an
                                        account? <a class="g-font-size-default" id="signin-link"
                                            href="{{ route('login') }}">Signin</a></p>
                                </div>
                            </div>
                            <!-- End Signup -->

                            <!-- Forgot Password -->
                            <div id="forgot-password" style="display: none;">
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                                        @if ($authMode === 'forgot' && session('status'))
                                            <div class="alert alert-success g-mb-20">{{ session('status') }}</div>
                                        @endif
                                        @if ($authMode === 'forgot' && $errors->any())
                                            <div class="alert alert-danger g-mb-20">{{ $errors->first() }}</div>
                                        @endif

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">Enter your
                                                email</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-education-166 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="email" name="email" value="{{ old('email') }}"
                                                    placeholder="john@gmail.com" required autocomplete="username">
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <button type="submit"
                                                class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7 ml-auto">Recover
                                                Password</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="text-center g-pt-30">
                                    <p class="g-color-text-light-v1 g-font-size-default mb-0">Remember your
                                        password? <a class="g-font-size-default" id="go-back-link"
                                            href="{{ route('login') }}">Signin</a></p>
                                </div>
                            </div>
                            <!-- End Forgot Password -->
                            <!-- End Contact Form -->

                            <hr class="g-hidden-md-up g-my-60">
                        </div>

                        <div class="col-md-6 order-md-1">
                            <div class="g-max-width-400">
                                <!-- Media -->
                                <div class="media align-items-center g-mb-30">
                                    <div class="d-flex mr-4">
                                        <span
                                            class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                            <i class="material-icons">adb</i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">Watch out for sites or emails that <a href="#">pretend
                                                to be legitimate</a> and ask for your NetLink ID and password.</p>
                                    </div>
                                </div>
                                <!-- End Media -->

                                <!-- Media -->
                                <div class="media align-items-center g-mb-30">
                                    <div class="d-flex mr-4">
                                        <span
                                            class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                            <i class="material-icons">bug_report</i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0"><a href="#">Report suspicious requests</a> for your
                                            NetLink ID and password.</p>
                                    </div>
                                </div>
                                <!-- End Media -->

                                <!-- Media -->
                                <div class="media align-items-center">
                                    <div class="d-flex mr-4">
                                        <span
                                            class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                            <i class="material-icons">verified_user</i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">Learn more about <a href="#">how to protect your
                                                account and computer</a>.</p>
                                    </div>
                                </div>
                                <!-- End Media -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Signin Form -->

        <!-- Footer -->
        <footer class="container text-center g-py-30">
            <div class="row justify-content-lg-center align-items-center text-center">
                <div class="col-sm-6 col-md-4 col-lg-3 order-md-3 g-mb-30">
                    <a class="u-link-v5 g-color-text g-color-primary--hover" href="#">
                        <i class="align-middle mr-2 icon-real-estate-027 u-line-icon-pro"></i>
                        Kingston, Ontario, Canada
                    </a>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 order-md-2 g-mb-30">
                    <!-- Social Icons -->
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="g-font-size-default fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="g-font-size-default fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="g-font-size-default fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="g-font-size-default fa fa-youtube"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="g-font-size-default fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Social Icons -->
                </div>

                <div class="col-md-4 col-lg-3 order-md-1 g-mb-30">
                    <p class="g-color-text mb-0">University of Unify - Since 1978</p>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </main>

    <!-- JS Global Compulsory -->
    <script src="web/assets/vendor/jquery/jquery.min.js"></script>
    <script src="web/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="web/assets/vendor/popper.js/popper.min.js"></script>
    <script src="web/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="web/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

    <!-- JS Unify -->
    <script src="web/assets/js/hs.core.js"></script>
    <script src="web/assets/js/components/hs.header.js"></script>
    <script src="web/assets/js/helpers/hs.hamburgers.js"></script>
    <script src="web/assets/js/components/hs.dropdown.js"></script>
    <script src="web/assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="web/assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            const authMode = @json($authMode);

            function showAuthPane(mode) {
                const targetMode = mode || 'signin';
                $('#signin').toggle(targetMode === 'signin');
                $('#signup').toggle(targetMode === 'signup');
                $('#forgot-password').toggle(targetMode === 'forgot');
            }

            showAuthPane(authMode);

            // Signin Tab
            $('#signin-link, #go-back-link').on('click', function(e) {
                e.preventDefault();
                showAuthPane('signin');
            });

            $('#signup-link').on('click', function(e) {
                e.preventDefault();
                showAuthPane('signup');
            });

            $('#forgot-password-link').on('click', function(e) {
                e.preventDefault();
                showAuthPane('forgot');
            });
        });
    </script>
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v2.6.3/multipage/education/page-signin-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 13:34:18 GMT -->

</html>
