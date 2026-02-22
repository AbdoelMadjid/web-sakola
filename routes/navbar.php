<?php

use Illuminate\Support\Facades\Route;

Route::prefix('website/pages')->name('navbar.')->group(function () {
    Route::get('/', function () {
        return view('website.pages.index');
    })->name('index');

    Route::get('/{page}', function (string $page) {
        $view = "website.pages.{$page}";

        abort_unless(view()->exists($view), 404);

        return view($view);
    })->name('page');
});