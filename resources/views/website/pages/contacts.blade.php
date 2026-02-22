<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6.3/multipage/education/page-contacts-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 13:34:18 GMT -->

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>{{ str_starts_with(app()->getLocale(), 'id') ? 'Multipage - Halaman Kontak Pendidikan | Unify - Template Website Responsif' : 'Multipage - Education Contacts Page | Unify - Responsive Website Template' }}</title>

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
    <main>
        <!-- Header -->
        @include('website.layouts.header')
        <!-- End Header -->

        <!-- Contacts -->
        <div class="g-bg-img-hero g-bg-pos-top-center"
            style="background-image: url(web/assets/include/svg/svg-bg2.svg);">
            <div class="container g-pt-100 g-pb-20">
                <!-- Heading -->
                <div class="g-max-width-645 text-center mx-auto g-mb-40">
                    <h1 class="g-font-size-40--md mb-4">Contact Us</h1>
                    <p>Our team is happy to answer your sales questions. Fill out the form and we’ll be in touch as soon
                        as possible.</p>
                </div>
                <!-- End Heading -->

                <div class="row justify-content-lg-center align-items-center">
                    <div class="col-md-8 col-lg-7 g-mb-50">
                        <!-- Contact Form -->
                        <form class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                            <!-- Name Input -->
                            <div class="row align-items-center mb-4">
                                <div class="col-lg-4">
                                    <label class="g-font-weight-500 g-font-size-16">Your full name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input
                                        class="form-control h-100 g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12"
                                        type="text" placeholder="John Doe">
                                </div>
                            </div>
                            <!-- End Name Input -->

                            <!-- Name Input -->
                            <div class="row align-items-center mb-4">
                                <div class="col-lg-4">
                                    <label class="g-font-weight-500 g-font-size-16">Your email address</label>
                                </div>
                                <div class="col-lg-8">
                                    <input
                                        class="form-control h-100 g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12"
                                        type="email" placeholder="john@gmail.com">
                                </div>
                            </div>
                            <!-- End Name Input -->

                            <!-- Name Input -->
                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="g-font-weight-500 g-font-size-16">Your question</label>
                                </div>
                                <div class="col-lg-8">
                                    <textarea class="form-control g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12"
                                        rows="5" placeholder="Hi there, I would like to ..."></textarea>
                                </div>
                            </div>
                            <!-- End Name Input -->

                            <div class="text-right">
                                <button type="submit"
                                    class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10">Submit</button>
                            </div>
                        </form>
                        <!-- End Contact Form -->
                    </div>

                    <div class="col-md-4 col-lg-3 g-mb-50">
                        <div class="g-pl-15--lg">
                            <h2 class="h3 mb-4">Address Details:</h2>

                            <!-- Contact Info -->
                            <div class="media align-items-center mb-4">
                                <div class="d-flex mr-3">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <span>61 Oxford str., Kingston, Ontario, Canada</span>
                                </div>
                            </div>
                            <!-- End Contact Info -->

                            <!-- Contact Info -->
                            <div class="media align-items-center mb-4">
                                <div class="d-flex mr-3">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                        <i class="fa fa-envelope-open"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <span>support@unify.com</span>
                                </div>
                            </div>
                            <!-- End Contact Info -->

                            <!-- Contact Info -->
                            <div class="media align-items-center">
                                <div class="d-flex mr-3">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <span>1-800-643-4500</span>
                                </div>
                            </div>
                            <!-- End Contact Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contacts -->

        <!-- Contacts Info -->
        <div class="container g-pt-50 g-pb-20">
            <div class="row justify-content-lg-center">
                <div class="col-md-6 col-lg-5 g-mb-30">
                    <!-- Additional Contact Info -->
                    <div class="media g-pr-10--lg">
                        <div class="d-flex mr-3">
                            <span class="u-icon-v1 u-icon-size--lg g-color-primary">
                                <i class="fa fa-comments-o"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h4">General communication</h3>
                            <p class="g-color-text-light-v1">For general queries, including partnership opportunities,
                                please email <a href="#">info@unify.com</a>.</p>
                        </div>
                    </div>
                    <!-- End Additional Contact Info -->
                </div>

                <div class="col-md-6 col-lg-5 g-mb-30">
                    <!-- Additional Contact Info -->
                    <div class="media g-pl-10--lg">
                        <div class="d-flex mr-3">
                            <span class="u-icon-v1 u-icon-size--lg g-color-primary">
                                <i class="fa fa-support"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h4">Technical or account support</h3>
                            <p class="g-color-text-light-v1">We’re here to help! If you have technical issues, <a
                                    href="#">contact support</a></p>
                        </div>
                    </div>
                    <!-- End Additional Contact Info -->
                </div>
            </div>
        </div>
        <!-- End Contacts Info -->

        <!-- Call to Action -->
        <div class="g-pos-rel">
            <div class="container text-center g-pt-100 g-pb-50">
                <!-- Heading -->
                <div class="g-max-width-645 mx-auto g-mb-40">
                    <h2 class="h1 mb-3">Join Unify University</h2>
                    <p>Our strategy is simple: to create a place where the best researchers and most promising students
                        can achieve their full potential.</p>
                </div>
                <!-- End Heading -->

                <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-13"
                    href="page-apply-1.html">Apply Now</a>

                <!-- SVG Shape -->
                <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1"
                    enable-background="new 0 0 37 1" xml:space="preserve">
                    <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="0" y1="0.5"
                        x2="37" y2="0.5">
                        <stop offset="0" style="stop-color:#f5f6fa" />
                        <stop offset="1" style="stop-color:#b5b8cb" />
                    </linearGradient>
                    <line fill="none" stroke="url(#SVGID_5_)" stroke-miterlimit="10" x1="37"
                        y1="0.5" x2="0" y2="0.5" />
                </svg>
                <!-- End SVG Shape -->

                <span class="align-middle g-color-primary mx-1">or</span>

                <!-- SVG Shape -->
                <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1"
                    enable-background="new 0 0 37 1" xml:space="preserve">
                    <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-10" y1="-1.5"
                        x2="27" y2="-1.5" gradientTransform="matrix(-1 0 0 -1 27 -1)">
                        <stop offset="0" style="stop-color:#f5f6fa" />
                        <stop offset="1" style="stop-color:#b5b8cb" />
                    </linearGradient>
                    <line fill="none" stroke="url(#SVGID_6_)" stroke-miterlimit="10" x1="0"
                        y1="0.5" x2="37" y2="0.5" />
                </svg>
                <!-- End SVG Shape -->

                <a class="btn u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-rounded-30 g-px-35 g-py-13"
                    href="page-contacts-1.html">Contact Us</a>
            </div>

            <!-- SVG Background Shape -->
            <svg class="g-pos-abs g-bottom-0 g-left-0 g-z-index-minus-1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323"
                enable-background="new 0 0 1920 323" xml:space="preserve">
                <polygon fill="#f0f2f8" points="0,323 1920,323 1920,0 " />
                <polygon fill="#f5f6fa" points="-0.5,322.5 -0.5,131.5 658.3,212.3 " />
            </svg>
            <!-- End SVG Background Shape -->
        </div>
        <!-- End Call to Action -->

        <!-- Footer -->
        <footer class="g-bg-secondary g-pt-100 g-pb-50">
            <div class="container">
                <div class="row g-mb-40">
                    <div class="col-6 col-md-3 g-mb-20">
                        <!-- Footer Links -->
                        <ul class="list-unstyled">
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Future Students</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Current Students</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Alumni</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Faculty &amp; Staff</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Donors</a></li>
                        </ul>
                        <!-- End Footer Links -->
                    </div>

                    <div class="col-6 col-md-3 g-mb-20">
                        <!-- Footer Links -->
                        <ul class="list-unstyled">
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">News &amp; Media</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Research &amp; Innovation</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Academics</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Programs of Study</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">University Life</a></li>
                        </ul>
                        <!-- End Footer Links -->
                    </div>

                    <div class="col-6 col-md-3 g-mb-20">
                        <!-- Footer Links -->
                        <ul class="list-unstyled">
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Contacts</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Careers</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Accessibility</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Privacy</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Site Feedback</a></li>
                        </ul>
                        <!-- End Footer Links -->
                    </div>

                    <div class="col-6 col-md-3 g-mb-20">
                        <!-- Footer Links -->
                        <ul class="list-unstyled">
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Downtown Ontario Campus</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Mississauga Campus</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Scarborough Campus</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Campus Maps</a></li>
                            <li class="g-py-5"><a
                                    class="u-link-v5 g-color-footer-links g-color-primary--hover g-font-size-16"
                                    href="#">Campus Safety</a></li>
                        </ul>
                        <!-- End Footer Links -->
                    </div>
                </div>

                <!-- Footer Copyright -->
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
                <!-- End Footer Copyright -->
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Go to Top -->
        <a class="js-go-to u-go-to-v1 u-shadow-v32 g-width-40 g-height-40 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-bg-main--focus g-font-size-12 rounded-circle"
            href="#" data-type="fixed" data-position='{
       "bottom": 15,
       "right": 15
     }'
            data-offset-top="400" data-compensation="#js-header" data-show-effect="slideInUp"
            data-hide-effect="slideInDown">
            <i class="hs-icon hs-icon-arrow-top"></i>
        </a>
        <!-- End Go to Top -->
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
        });
    </script>
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v2.6.3/multipage/education/page-contacts-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 13:34:18 GMT -->

</html>
