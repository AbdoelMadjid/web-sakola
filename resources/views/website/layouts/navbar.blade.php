<div id="navBar" class="collapse navbar-collapse">
    <ul class="navbar-nav align-items-lg-center g-py-30 g-py-0--lg ml-auto">
        <!-- Pages - Mega Menu -->
        <li class="nav-item hs-has-mega-menu" data-animation-in="fadeIn" data-animation-out="fadeOut" data-position="left">
            <a id="mega-menu-label-1"
                class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                href="#" aria-haspopup="true" aria-expanded="false">
                {{ __('website.pages') }}
                <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
            </a>

            <!-- Mega Menu -->
            <div class="w-100 hs-mega-menu u-shadow-v39 g-brd-around g-brd-7 g-brd-white g-bg-secondary g-text-transform-none g-pa-30 g-pa-50--lg g-my-20 g-my-0--lg"
                aria-labelledby="mega-menu-label-1">
                <span class="d-block h1 g-brd-bottom g-brd-2 g-brd-main pb-2 mb-5">{{ __('website.pages') }}</span>

                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <!-- Links -->
                        <ul class="list-unstyled g-pr-30 mb-0">
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'programs']) }}">
                                    {{ __('website.programs') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'future-students']) }}">
                                    {{ __('website.future_students') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'current-students']) }}">
                                    {{ __('website.current_students') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <!-- Links -->
                        <ul class="list-unstyled g-pr-30 mb-0">
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'faculty-and-staff']) }}">
                                    {{ __('website.faculty_staff') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'events']) }}">
                                    {{ __('website.events') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'alumni']) }}">
                                    {{ __('website.alumni') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <!-- Links -->
                        <ul class="list-unstyled g-pr-30 mb-0">
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'campus-life']) }}">
                                    {{ __('website.campus_life') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'research']) }}">
                                    {{ __('website.research') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'apply']) }}">
                                    {{ __('website.apply') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <!-- Links -->
                        <ul class="list-unstyled g-pr-30 mb-0">
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'contacts']) }}">
                                    {{ __('website.contacts') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="{{ route('navbar.page', ['page' => 'help']) }}">
                                    {{ __('website.help') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="@auth{{ route('dashboard') }}@else{{ route('navbar.page', ['page' => 'signin']) }} @endauth">
                                    @auth
                                        {{ __('website.dashboard') }}
                                    @else
                                        {{ __('website.signin') }}
                                    @endauth
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                            <li class="py-2">
                                <a class="d-flex g-brd-top g-brd-primary g-color-main g-color-primary--hover g-text-underline--none--hover g-pt-15 g-pb-5"
                                    href="{{ route('navbar.index') }}">
                                    {{ __('website.main') }}
                                    <i
                                        class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>
                </div>
            </div>
            <!-- End Mega Menu -->
        </li>
        <!-- End Pages - Mega Menu -->

        <li class="nav-item">
            <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                href="{{ route('navbar.page', ['page' => 'programs']) }}">
                {{ __('website.programs') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                href="{{ route('navbar.page', ['page' => 'future-students']) }}">
                {{ __('website.future_students') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                href="{{ route('navbar.page', ['page' => 'current-students']) }}">
                {{ __('website.current_students') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                href="{{ route('navbar.page', ['page' => 'faculty-and-staff']) }}">
                {{ __('website.faculty_staff') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                href="{{ route('navbar.page', ['page' => 'events']) }}">
                {{ __('website.events') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-pl-15--lg g-pr-0--lg g-py-10 g-py-30--lg"
                href="{{ route('navbar.page', ['page' => 'alumni']) }}">
                {{ __('website.alumni') }}
            </a>
        </li>
    </ul>
</div>
