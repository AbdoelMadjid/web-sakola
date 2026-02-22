<!-- Jump To -->
<li class="list-inline-item g-pos-rel">
    <a id="jump-to-dropdown-invoker"
        class="d-block d-lg-none u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-py-7"
        href="#" aria-controls="jump-to-dropdown" aria-haspopup="true" aria-expanded="false"
        data-dropdown-event="hover" data-dropdown-target="#jump-to-dropdown" data-dropdown-type="css-animation"
        data-dropdown-duration="0" data-dropdown-hide-on-scroll="true" data-dropdown-animation-in="fadeIn"
        data-dropdown-animation-out="fadeOut">
        {{ __('website.jump_to') }}
        <i class="g-ml-3 fa fa-angle-down"></i>
    </a>
    <ul id="jump-to-dropdown"
        class="list-unstyled u-shadow-v39 g-brd-around g-brd-4 g-brd-white g-bg-secondary g-pos-abs g-left-0 g-z-index-99 g-mt-13"
        aria-labelledby="jump-to-dropdown-invoker">
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('navbar.page', ['page' => 'apply']) }}">{{ __('website.apply_now') }}</a>
        </li>
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('navbar.page', ['page' => 'campus-life']) }}">Campus
                Life</a>
        </li>
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('navbar.page', ['page' => 'research']) }}">{{ __('website.research') }}</a>
        </li>
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('navbar.page', ['page' => 'help']) }}">{{ __('website.help') }}</a>
        </li>
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('navbar.page', ['page' => 'contacts']) }}">{{ __('website.contacts') }}</a>
        </li>
        <li class="dropdown-item g-px-0 g-py-2">
            <a class="nav-link g-color-white g-bg-primary g-bg-primary-light-v1--hover g-font-size-default"
                href="@auth{{ route('dashboard') }}@else{{ route('navbar.page', ['page' => 'signin']) }}@endauth">
                @auth
                    {{ __('website.dashboard') }}
                @else
                    {{ __('website.signin') }}
                @endauth
            </a>
        </li>
    </ul>
</li>
<!-- End Jump To -->
