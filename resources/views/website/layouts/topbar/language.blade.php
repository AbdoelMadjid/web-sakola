@php
    $currentLocale = app()->getLocale() === 'id' ? 'id' : 'en';
@endphp

<li class="list-inline-item g-pos-rel ml-lg-auto">
    <a id="language-dropdown-invoker"
        class="d-none d-sm-flex align-items-center u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-pl-0 g-pl-10--lg g-pr-10 g-py-15"
        href="#" aria-controls="language-dropdown" aria-haspopup="true" aria-expanded="false"
        data-dropdown-event="hover" data-dropdown-target="#language-dropdown" data-dropdown-type="css-animation"
        data-dropdown-duration="100" data-dropdown-hide-on-scroll="true" data-dropdown-animation-in="fadeIn"
        data-dropdown-animation-out="fadeOut">
        <img class="mr-1" src="{{ $currentLocale === 'id' ? asset('admin/assets/media/flags/indonesia.svg') : asset('admin/assets/media/flags/united-states.svg') }}"
            alt="language" width="18" height="12">
        {{ $currentLocale === 'id' ? __('website.indonesian') : __('website.english') }}
        <i class="g-ml-3 fa fa-angle-down"></i>
    </a>

    <ul id="language-dropdown"
        class="list-unstyled u-shadow-v39 g-brd-around g-brd-4 g-brd-white g-bg-secondary g-pos-abs g-left-0 g-z-index-99 g-mt-5"
        aria-labelledby="language-dropdown-invoker">
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link d-flex align-items-center g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default {{ $currentLocale === 'en' ? 'active' : '' }}"
                href="{{ route('locale.switch', 'en') }}">
                <img class="mr-1 g-ml-minus-10" src="{{ asset('admin/assets/media/flags/united-states.svg') }}" alt="English"
                    width="18" height="12">
                {{ __('website.english') }}
            </a>
        </li>
        <li class="dropdown-item g-px-0 g-py-2">
            <a class="nav-link d-flex align-items-center g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default {{ $currentLocale === 'id' ? 'active' : '' }}"
                href="{{ route('locale.switch', 'id') }}">
                <img class="mr-1 g-ml-minus-10" src="{{ asset('admin/assets/media/flags/indonesia.svg') }}"
                    alt="Bahasa Indonesia" width="18" height="12">
                {{ __('website.indonesian') }}
            </a>
        </li>
    </ul>
</li>
