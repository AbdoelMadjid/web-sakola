<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

$pagesPath = resource_path('views/admin/pages');

$files = File::allFiles($pagesPath);

Route::middleware(['auth'])->group(function () use ($files) {
    foreach ($files as $file) {
        // Ambil path relatif terhadap folder "pages"
        $relativePath = $file->getRelativePathname(); // contoh: "apps/projects/targets.blade.php"

        // Hilangkan extension .blade.php
        $relativePath = str_replace('.blade.php', '', $relativePath);

        // Untuk route name (pakai titik)
        $routeName = str_replace(['/', '\\'], '.', $relativePath);

        // Untuk URL path (pakai slash)
        $routeUrl = '/' . str_replace(['\\'], '/', $relativePath);

        Route::get($routeUrl, function () use ($routeName) {
            return view('admin.pages.' . $routeName);
        })->name($routeName);
    }
});

// Fallback tetap di luar middleware, supaya 404 bisa tampil meskipun belum login
Route::fallback(function () {
    return view('admin.pages.pages.authentication.general.error-404');
});
