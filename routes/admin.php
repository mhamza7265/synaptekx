<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HomePageContentController;
use App\Http\Controllers\Admin\AboutPageContentController;
use App\Http\Controllers\Admin\ContactPageContentController;
use App\Http\Controllers\Admin\SettingsPageContentController;

Route::group(['middleware' => ['role:admin,superadmin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/pages', [AdminController::class, 'pages'])->name('pages');
    Route::resource('/blogs', BlogController::class)->names('blogs');
    //home page cms routes
    Route::get('/home-page/edit', [HomePageContentController::class, 'edit'])->name('home-page.edit');

    //about page cms routes
    Route::get('/about-page/edit', [AboutPageContentController::class, 'edit'])->name('about-page.edit');

    //contact page cms routes
    Route::get('/contact-page/edit', [ContactPageContentController::class, 'edit'])->name('contact-page.edit');

    //settings cms routes
    Route::get('/site-settings/edit', [SettingsPageContentController::class, 'edit'])->name('settings.edit');
});
