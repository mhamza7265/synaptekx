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
use App\Http\Controllers\Admin\PagesMetaContentController;
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
    Route::post('/blogs-page/hero/update', [BlogsPageContentController::class, 'updateBlogsHero'])->name('blogs-page.hero.update');
    Route::post('/blogs-page/detail/update', [BlogsPageContentController::class, 'updateBlogsDetails'])->name('blogs-page.details.update');
    Route::get('/blogs-page/detail/edit', [BlogsPageContentController::class, 'detailEdit'])->name('blogs-page.detail.edit');

    //home page cms routes
    Route::get('/home-page/edit', [HomePageContentController::class, 'edit'])->name('home-page.edit');
    Route::post('/home-page/hero/update', [HomePageContentController::class, 'updateHero'])->name('home-page.hero.update');
    Route::delete('/home-page/hero/delete/{index}', [HomePageContentController::class, 'deleteHero'])->name('home-page.hero.delete');

    Route::post('/home-page/services/update', [HomePageContentController::class, 'updateServices'])->name('home-page.services.update');
    Route::delete('/home-page/services/delete/{index}', [HomePageContentController::class, 'deleteService'])->name('home-page.services.delete');

    Route::post('/home-page/transformation/update', [HomePageContentController::class, 'updateTransformSection'])->name('home-page.transformation.update');

    Route::post('/home-page/features/update', [HomePageContentController::class, 'updateFeaturesSection'])->name('home-page.features.update');

    //services cms routes
    Route::resource('/services', ServicesPagesController::class)->names('services');

    //about page cms routes
    Route::get('/about-page/edit', [AboutPageContentController::class, 'edit'])->name('about-page.edit');

    //partners page cms routes
    Route::get('/partners-page/edit', [PartnersPageContentController::class, 'edit'])->name('partners-page.edit');

    //contact page cms routes
    Route::get('/contact-page/edit', [ContactPageContentController::class, 'edit'])->name('contact-page.edit');
    Route::post('/contact-page/hero/update', [ContactPageContentController::class, 'updateHero'])->name('contact-page.hero.update');
    Route::post('/contact-page/details/update', [ContactPageContentController::class, 'updateDetails'])->name('contact-page.details.update');

    //settings cms routes
    Route::get('/site-settings/edit', [SettingsPageContentController::class, 'edit'])->name('settings.edit');
    Route::post('/site-settings/appearance/update', [SettingsPageContentController::class, 'updateAppearance'])->name('settings.appearance.update');
    Route::post('/site-settings/socials/update', [SettingsPageContentController::class, 'updateSocials'])->name('settings.socials.update');
    Route::post('/site-settings/contact-form/update', [SettingsPageContentController::class, 'updateContactForm'])->name('settings.contact-form.update');


    //legal cms routes
    Route::get('/privacy-policy/edit', [LegalPagesContentController::class, 'privacyPolicy'])->name('privacy-policy.edit');
    Route::get('/cookies-policy/edit', [LegalPagesContentController::class, 'cookiesPolicy'])->name('cookies-policy.edit');
    Route::get('/terms-of-use/edit', [LegalPagesContentController::class, 'terms'])->name('terms-of-use.edit');
    Route::post('/legal/hero/update/{slug}', [LegalPagesContentController::class, 'updateHero'])->name('legal.hero.update');
    Route::post('/legal/content/update/{slug}', [LegalPagesContentController::class, 'updateContent'])->name('legal.content.update');

    //pages meta route
    Route::post('/page-meta/{slug}', [PagesMetaContentController::class, 'update'])->name('page-meta.update');
});
