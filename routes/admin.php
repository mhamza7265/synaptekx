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
use App\Http\Controllers\Admin\BlogsPageContentController;
use App\Http\Controllers\Admin\ContactPageContentController;
use App\Http\Controllers\Admin\LegalPagesContentController;
use App\Http\Controllers\Admin\PartnersPageContentController;
use App\Http\Controllers\Admin\ServicesPagesController;
use App\Http\Controllers\Admin\SettingsPageContentController;

Route::group(['middleware' => ['role:admin,superadmin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/pages', [AdminController::class, 'pages'])->name('pages');
    // blog routes
    Route::resource('/blogs', BlogController::class)->names('blogs');
    //blog cms routes
    Route::get('/blogs-page/edit', [BlogsPageContentController::class, 'edit'])->name('blogs-page.edit');
    Route::get('/blogs-page/detail/edit', [BlogsPageContentController::class, 'detailEdit'])->name('blogs-page.detail.edit');

    //home page cms routes
    Route::get('/home-page/edit', [HomePageContentController::class, 'edit'])->name('home-page.edit');

    //services cms routes
    Route::resource('/services', ServicesPagesController::class)->names('services');

    //about page cms routes
    Route::get('/about-page/edit', [AboutPageContentController::class, 'edit'])->name('about-page.edit');

    //partners page cms routes
    Route::get('/partners-page/edit', [PartnersPageContentController::class, 'edit'])->name('partners-page.edit');

    //contact page cms routes
    Route::get('/contact-page/edit', [ContactPageContentController::class, 'edit'])->name('contact-page.edit');

    //settings cms routes
    Route::get('/site-settings/edit', [SettingsPageContentController::class, 'edit'])->name('settings.edit');

    //legal cms routes
    Route::get('/privacy-policy/edit', [LegalPagesContentController::class, 'privacyPolicy'])->name('privacy-policy.edit');
    Route::get('/cookies-policy/edit', [LegalPagesContentController::class, 'cookiesPolicy'])->name('cookies-policy.edit');
    Route::get('/terms-of-use/edit', [LegalPagesContentController::class, 'terms'])->name('terms-of-use.edit');
});
