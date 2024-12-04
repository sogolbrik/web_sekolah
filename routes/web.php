<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SettingLandingPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return route('LandingPage');
});

//CRUD
Route::resource('landing-page', LandingPageController::class);

//one
Route::get('dashboard', [SettingLandingPage::class, 'landingPage'])->name('landingPage');
Route::get('backend', [LandingPageController::class, 'backend'])->name('backend');

//MultiPage Dashboard
Route::get('schoolProfile', [SettingLandingPage::class, 'schoolProfile'])->name('schoolProfile');
Route::get('award', [SettingLandingPage::class, 'award'])->name('award');
Route::get('blog', [SettingLandingPage::class, 'blog'])->name('blog');
Route::get('gallery', [SettingLandingPage::class, 'gallery'])->name('gallery');
Route::get('about', [SettingLandingPage::class, 'about'])->name('about');



Route::get('belakang', function() {
    return view('templates.backend.main');
})->name('belakang');