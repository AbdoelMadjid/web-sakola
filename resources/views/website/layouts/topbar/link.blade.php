<!-- Links -->
<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15"
        href="{{ route('navbar.page', ['page' => 'campus-life']) }}">{{ __('website.campus_life') }}</a>
</li>
<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15"
        href="{{ route('navbar.page', ['page' => 'research']) }}">{{ __('website.research') }}</a>
</li>
<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15"
        href="{{ route('navbar.page', ['page' => 'help']) }}">{{ __('website.help') }}</a>
</li>
<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15"
        href="{{ route('navbar.page', ['page' => 'contacts']) }}">{{ __('website.contacts') }}</a>
</li>
<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 u-shadow-v19 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-12 text-uppercase g-rounded-20 g-px-18 g-py-8 g-ml-10"
        href="@auth{{ route('dashboard') }}@else{{ route('navbar.page', ['page' => 'signin']) }}@endauth">
        @auth
            {{ __('website.dashboard') }}
        @else
            {{ __('website.signin') }}
        @endauth
    </a>
</li>
<!-- End Links -->
