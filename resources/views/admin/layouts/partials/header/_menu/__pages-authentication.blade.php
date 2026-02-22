<div class="row">
    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                {{ menuTitle('Corporate Layout') }}
            </h4>
            <!--end:Menu heading-->
            <!--begin:Menu item-->
            @foreach (config('header._header_pages.corporate_layouts') as $menu)
                <div class="menu-item p-0 m-0">
                    <a href="{{ route($menu['route']) }}"
                        class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                        @if (!empty($menu['target'])) target="{{ $menu['target'] }}" rel="noopener noreferrer" @endif
                        onclick="if (this.target === '_blank') { window.open(this.href, '_blank'); return false; }">
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
                {{ menuTitle('Overlay Layout') }}
            </h4>
            <!--end:Menu heading-->
            <!--begin:Menu item-->
            @foreach (config('header._header_pages.overlay_layouts') as $menu)
                <div class="menu-item p-0 m-0">
                    <a href="{{ route($menu['route']) }}"
                        class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                        @if (!empty($menu['target'])) target="{{ $menu['target'] }}" rel="noopener noreferrer" @endif
                        onclick="if (this.target === '_blank') { window.open(this.href, '_blank'); return false; }">
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
                {{ menuTitle('Creative Layout') }}
            </h4>
            <!--end:Menu heading-->
            <!--begin:Menu item-->
            @foreach (config('header._header_pages.creative_layouts') as $menu)
                <div class="menu-item p-0 m-0">
                    <a href="{{ route($menu['route']) }}"
                        class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                        @if (!empty($menu['target'])) target="{{ $menu['target'] }}" rel="noopener noreferrer" @endif
                        onclick="if (this.target === '_blank') { window.open(this.href, '_blank'); return false; }">
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
                {{ menuTitle('Fancy Layout') }}
            </h4>
            <!--end:Menu heading-->
            <!--begin:Menu item-->
            @foreach (config('header._header_pages.fancy_layouts') as $menu)
                <div class="menu-item p-0 m-0">
                    <a href="{{ route($menu['route']) }}"
                        class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                        @if (!empty($menu['target'])) target="{{ $menu['target'] }}" rel="noopener noreferrer" @endif
                        onclick="if (this.target === '_blank') { window.open(this.href, '_blank'); return false; }">
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
                {{ menuTitle('General') }}
            </h4>
            <!--end:Menu heading-->
            <!--begin:Menu item-->
            @foreach (config('header._header_pages.general') as $menu)
                <div class="menu-item p-0 m-0">
                    <a href="{{ route($menu['route']) }}"
                        class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                        @if (!empty($menu['target'])) target="{{ $menu['target'] }}" rel="noopener noreferrer" @endif
                        onclick="if (this.target === '_blank') { window.open(this.href, '_blank'); return false; }">
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
                {{ menuTitle('Email Templates') }}
            </h4>
            <!--end:Menu heading-->
            <!--begin:Menu item-->
            @foreach (config('header._header_pages.email') as $menu)
                <div class="menu-item p-0 m-0">
                    <a href="{{ route($menu['route']) }}"
                        class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                        @if (!empty($menu['target'])) target="{{ $menu['target'] }}" rel="noopener noreferrer" @endif
                        onclick="if (this.target === '_blank') { window.open(this.href, '_blank'); return false; }">
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
