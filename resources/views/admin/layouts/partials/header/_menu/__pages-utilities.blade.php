<!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-7">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        General Modals
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.general_modal') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
            </div>
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--end:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        Form Modals
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.forms_modal') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                </div>
            </div>
            <!--end:Col-->
            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        Wizard Modals
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.advance_modal') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
        </div>
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        Search
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.search') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
            </div>
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        Wizards
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.wizards') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
            </div>
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        Search Modals
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.search_modal') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->
    <!--begin:Col-->
    <div class="col-lg-5 pe-lg-5">
        <img src="admin/assets/media/stock/600x600/img-84.jpg" class="rounded mw-100" alt="" />
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->

