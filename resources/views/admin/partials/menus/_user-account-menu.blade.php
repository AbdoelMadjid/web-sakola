<!--begin::User account menu-->
@php
    $currentLocale = app()->getLocale() === 'id' ? 'id' : 'en';
    $authUser = auth()->user();
    $avatarPath = $authUser?->avatar ?: 'admin/assets/media/avatars/300-3.jpg';
    $avatarUrl = \Illuminate\Support\Str::startsWith($avatarPath, ['http://', 'https://'])
        ? $avatarPath
        : asset($avatarPath);
    $badgeRole = $authUser?->getRoleNames()->first();
@endphp
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
    data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Avatar" src="{{ $avatarUrl }}" />
            </div>
            <!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    {{ $authUser?->name ?? 'User' }} <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{ $badgeRole ? ucfirst($badgeRole) : 'User' }}</span>
                </div>
                <a href="{{ route('pages.account.overview') }}" class="fw-semibold text-muted text-hover-primary fs-7">
                    {{ $authUser?->email ?? '-' }} </a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="{{ route('pages.account.overview') }}" class="menu-link px-5">
            {{ __('admin.my_profile') }}
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="{{ route('apps.projects.list') }}" class="menu-link px-5">
            <span class="menu-text">{{ __('admin.my_projects') }}</span>
            <span class="menu-badge">
                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
            </span>
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title">{{ __('admin.my_subscription') }}</span>
            <span class="menu-arrow"></span>
        </a>
        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('pages.account.referrals') }}" class="menu-link px-5">
                    {{ __('admin.referrals') }}
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('pages.account.billing') }}" class="menu-link px-5">
                    {{ __('admin.billing') }}
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('pages.account.statements') }}" class="menu-link px-5">
                    {{ __('admin.payments') }}
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('pages.account.statements') }}" class="menu-link d-flex flex-stack px-5">
                    {{ __('admin.statements') }}
                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="{{ __('admin.view_your_statements') }}">
                        <i class="ki-duotone ki-information-5 fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i> </span>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
                            name="notifications" />
                        <span class="form-check-label text-muted fs-7">
                            {{ __('admin.notifications') }}
                        </span>
                    </label>
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="{{ route('pages.account.statements') }}" class="menu-link px-5">
            {{ __('admin.my_statements') }}
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    {{-- <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Mode
                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                    <i class="ki-duotone ki-night-day theme-light-show fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                        <span class="path10"></span>
                    </i> <i
                        class="ki-duotone ki-moon theme-dark-show fs-2">
    <span class="path1"></span>
    <span class="path2"></span>
</i> </span>
            </span>
        </a>
        <!--layout-partial:partials/theme-mode/__menu.html-->
        @include('admin.partials.theme-mode.__menu')
    </div>
    <!--end::Menu item--> --}}
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                {{ __('admin.language') }}
                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    @if ($currentLocale === 'id')
                        {{ __('admin.indonesian') }}
                        <img class="w-15px h-15px rounded-1 ms-2" src="admin/assets/media/flags/indonesia.svg"
                            alt="Indonesia" />
                    @else
                        {{ __('admin.english') }}
                        <img class="w-15px h-15px rounded-1 ms-2" src="admin/assets/media/flags/united-states.svg"
                            alt="English" />
                    @endif
                </span>
            </span>
        </a>
        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('locale.switch', 'en') }}"
                    class="menu-link d-flex px-5 {{ $currentLocale === 'en' ? 'active' : '' }}">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="admin/assets/media/flags/united-states.svg" alt="" />
                    </span>
                    {{ __('admin.english') }}
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('locale.switch', 'id') }}"
                    class="menu-link d-flex px-5 {{ $currentLocale === 'id' ? 'active' : '' }}">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="admin/assets/media/flags/indonesia.svg" alt="" />
                    </span>
                    {{ __('admin.indonesian') }}
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5 my-1">
        <a href="{{ route('pages.account.settings') }}" class="menu-link px-5">
            {{ __('admin.account_settings') }}
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="menu-link px-5"
                onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('admin.sign_out') }}
            </a>
            {{-- <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link> --}}
        </form>
        {{-- <a href="/authentication/layouts/corporate/sign-in" class="menu-link px-5">
            Sign Out
        </a> --}}
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->

