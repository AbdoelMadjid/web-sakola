<!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-8">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu heading-->
                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                    {{ menuTitle('User Profile') }}
                </h4>
                <!--end:Menu heading-->
                <!--begin:Menu item-->
                @foreach (config('header._header_pages.user_profile') as $menu)
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route($menu['route']) }}"
                            class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                            <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
                        </a>
                    </div>
                @endforeach
                <!--end:Menu item-->
            </div>
            <!--end:Col-->
            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        {{ menuTitle('Corporate') }}
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.corporate') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        {{ menuTitle('Careers') }}
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.careers') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        {{ menuTitle('FAQ') }}
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.faq') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        {{ menuTitle('Blog') }}
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.blog') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        {{ menuTitle('Pricing') }}
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.pricing') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                        {{ menuTitle('Social') }}
                    </h4>
                    <!--end:Menu heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_pages.social') as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
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
    <div class="col-lg-4">
        <img src="admin/assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="" />
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->

