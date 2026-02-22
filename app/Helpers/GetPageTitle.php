<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('getPageTitle')) {
    /**
     * Mendapatkan title berdasarkan route aktif dari file konfigurasi menu.
     *
     * @return string
     */
    function getPageTitle(): string
    {
        // Daftar file config dan kunci menu masing-masing
        $configs = [
            'sidebar._sidebar_dashboard' => ['menus_dashboard', 'menus_dashboard_collapsed'],
            'sidebar._sidebar_pages' => ['pages_menus'],
            'sidebar._sidebar_apps' => ['apps_menus'],
            'sidebar._sidebar_layouts' => ['layout_menus'],
            'sidebar._sidebar_helps' => ['help_menus'],
        ];

        $currentRoute = Route::current()->getName();

        foreach ($configs as $config => $menuKeys) {
            $configData = config($config, []);

            // Cek setiap kunci menu untuk config ini
            foreach ($menuKeys as $key) {
                $menus = isset($configData[$key]) && is_array($configData[$key]) ? $configData[$key] : [];

                if (!empty($menus)) {
                    foreach ($menus as $item) {
                        // Periksa route di level utama
                        if (isset($item['route']) && $item['route'] === $currentRoute) {
                            return $item['title'] ?? config('app.name', 'Metronic v.8.3.2 - Laravel 12');
                        }

                        // Periksa children jika ada
                        if (!empty($item['children'])) {
                            $title = searchMenuTitle($item['children'], $currentRoute);
                            if ($title) {
                                return $title;
                            }
                        }
                    }
                }
            }
        }

        return config('app.name', 'Metronic v.8.3.2 - Laravel 12');
    }
}

if (!function_exists('searchMenuTitle')) {
    /**
     * Mencari title secara rekursif di dalam array menu berdasarkan route.
     *
     * @param array $items
     * @param string $currentRoute
     * @return string|null
     */
    function searchMenuTitle(array $items, string $currentRoute): ?string
    {
        foreach ($items as $item) {
            if (isset($item['route']) && $item['route'] === $currentRoute) {
                return $item['title'] ?? null;
            }

            if (!empty($item['children'])) {
                $found = searchMenuTitle($item['children'], $currentRoute);
                if ($found) {
                    return $found;
                }
            }
        }

        return null;
    }
}

if (!function_exists('menuTitle')) {
    /**
     * Terjemahkan judul menu dari kamus menu.titles dengan fallback ke teks asli.
     */
    function menuTitle(?string $title): string
    {
        if (!$title) {
            return '';
        }

        $titles = trans('menu.titles');

        if (is_array($titles) && array_key_exists($title, $titles)) {
            return (string) $titles[$title];
        }

        return $title;
    }
}

if (!function_exists('menuDescription')) {
    /**
     * Terjemahkan deskripsi menu dari kamus menu.descriptions dengan fallback ke teks asli.
     */
    function menuDescription(?string $description): string
    {
        if (!$description) {
            return '';
        }

        $descriptions = trans('menu.descriptions');

        if (is_array($descriptions) && array_key_exists($description, $descriptions)) {
            return (string) $descriptions[$description];
        }

        return $description;
    }
}
