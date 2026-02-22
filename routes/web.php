<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/locale/{locale}', function (Request $request, string $locale) {
    $supportedLocales = ['id', 'en'];
    $targetLocale = in_array($locale, $supportedLocales, true) ? $locale : 'en';

    $request->session()->put('locale', $targetLocale);

    return redirect()->back();
})->name('locale.switch');

require __DIR__ . '/navbar.php';
require __DIR__ . '/menu.php';
require __DIR__ . '/auth.php';
