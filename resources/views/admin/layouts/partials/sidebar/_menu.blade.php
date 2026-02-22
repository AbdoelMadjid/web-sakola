<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
        <!--begin::Scroll wrapper-->
        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true"
            data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="menu-item {{ request()->routeIs(['dashboard', 'dashboards.*']) ? 'here show' : '' }} menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">{{ __('menu.dashboards') }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        @foreach (config('sidebar._sidebar_dashboard.menus_dashboard') as $menu)
                            <div class="menu-item">
                                <a class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                                    href="{{ route($menu['route']) }}">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
                                </a>
                            </div>
                        @endforeach

                        @php
                            $collapsedMenus = config('sidebar._sidebar_dashboard.menus_dashboard_collapsed') ?? [];
                            $collapsedCount = count($collapsedMenus);
                            $isActiveCollapse = collect($collapsedMenus)
                                ->pluck('route')
                                ->contains(fn($route) => request()->routeIs($route));

                            // teks yang sedang terlihat & teks alternatif yang akan dipakai oleh JS saat toggle
                            $visibleText = $isActiveCollapse ? __('menu.show_less') : __('menu.show_more', ['count' => $collapsedCount]);
                            $altText = $isActiveCollapse ? __('menu.show_more', ['count' => $collapsedCount]) : __('menu.show_less');
                        @endphp

                        <div class="menu-inner flex-column collapse {{ $isActiveCollapse ? 'show' : '' }}"
                            id="kt_app_sidebar_menu_dashboards_collapse">
                            @foreach (config('sidebar._sidebar_dashboard.menus_dashboard_collapsed') as $menu)
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                                        href="{{ route($menu['route']) }}">
                                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                        <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <!--end:Menu item-->
                        <div class="menu-item">
                            <div class="menu-content">
                                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible {{ $isActiveCollapse ? '' : 'collapsed' }}"
                                    data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse"
                                    data-kt-toggle-text="{{ $altText }}"
                                    aria-expanded="{{ $isActiveCollapse ? 'true' : 'false' }}">
                                    <span data-kt-toggle-text-target="true">{{ $visibleText }}</span>
                                    <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.pages') }}</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_pages.pages_menus') as $menu)
                    @include('admin.layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.apps') }}</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_apps.apps_menus') as $menu)
                    @include('admin.layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.layouts') }}</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_layouts.layout_menus') as $menu)
                    @include('admin.layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.help') }}</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_helps.help_menus') as $menu)
                    @include('admin.layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
            {{-- @include('admin.layouts.partials.sidebar._projects') --}}
        </div>
        <!--end::Scroll wrapper-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
