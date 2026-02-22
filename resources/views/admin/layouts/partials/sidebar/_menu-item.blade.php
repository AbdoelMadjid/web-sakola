@props(['menu', 'level' => 1])

@php
    // Rekursif cek aktif
    $isActiveRecursive = null;
    $isActiveRecursive = function ($item) use (&$isActiveRecursive) {
        if (!empty($item['children'])) {
            foreach ($item['children'] as $child) {
                if ($isActiveRecursive($child)) {
                    return true;
                }
            }
            return false;
        }
        return isset($item['route']) && request()->routeIs($item['route'] . '*');
    };

    $hasChildren = !empty($menu['children']);
    $isActiveParent = $isActiveRecursive($menu);
    $isActiveSelf = isset($menu['route']) && request()->routeIs($menu['route'] . '*');
@endphp

@if ($hasChildren && !($menu['dropdown'] ?? false))
    {{-- Item dengan submenu --}}
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ $isActiveParent ? 'here show' : '' }}">
        <span class="menu-link">
            @if ($level == 1)
                <span class="menu-icon">
                    <i class="{{ $menu['icon'] ?? '' }}">
                        @for ($i = 1; $i <= ($menu['paths'] ?? 0); $i++)
                            <span class="path{{ $i }}"></span>
                        @endfor
                    </i>
                </span>
            @else
                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            @endif
            <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion menu-active-bg">
            @foreach ($menu['children'] as $child)
                @include('admin.layouts.partials.sidebar._menu-item', [
                    'menu' => $child,
                    'level' => $level + 1,
                ])
            @endforeach
        </div>
    </div>
@elseif ($hasChildren && ($menu['dropdown'] ?? false))
    {{-- Dropdown --}}
    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention {{ $isActiveParent ? 'here show' : '' }}">

        <span class="menu-link">
            @if ($level == 1)
                <span class="menu-icon">
                    <i class="{{ $menu['icon'] ?? '' }}">
                        @for ($i = 1; $i <= ($menu['paths'] ?? 0); $i++)
                            <span class="path{{ $i }}"></span>
                        @endfor
                    </i>
                </span>
            @else
                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            @endif
            <span class="menu-title">{{ menuTitle($menu['title']) }}</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
            @foreach ($menu['children'] as $child)
                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs(($child['route'] ?? '') . '*') ? 'active' : '' }}"
                        href="{{ route($child['route']) }}"
                        {{ isset($menu['target']) ? 'target=' . $menu['target'] : '' }}>
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">{{ menuTitle($child['title']) }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@else
    {{-- Item tanpa anak --}}
    <div class="menu-item">
        <a class="menu-link {{ $isActiveSelf ? 'active' : '' }}"
            href="{{ isset($menu['href']) ? $menu['href'] : (isset($menu['route']) ? route($menu['route']) : '#') }}"
            {{ isset($menu['target']) ? 'target=' . $menu['target'] : '' }}>
            @if ($level == 1)
                <span class="menu-icon">
                    <i class="{{ $menu['icon'] ?? '' }}">
                        @for ($i = 1; $i <= ($menu['paths'] ?? 0); $i++)
                            <span class="path{{ $i }}"></span>
                        @endfor
                    </i>
                </span>
            @else
                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            @endif
            <span class="menu-title">{{ menuTitle($menu['title']) }}</span>

            @if (isset($menu['badge']))
                <span class="menu-badge">
                    <span class="{{ $menu['badge']['class'] ?? 'badge badge-info' }}">
                        {{ $menu['badge']['label'] ?? '' }}
                    </span>
                </span>
            @endif
        </a>
    </div>
@endif

