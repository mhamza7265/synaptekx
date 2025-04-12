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

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });

// Route::get('storage-link', [AdminController::class, 'storageLink'])->name('storage.link');

Route::group(['middleware' => ['role:admin,superadmin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/pages', [AdminController::class, 'pages'])->name('pages');
    Route::resource('/blogs', BlogController::class)->names('blogs');
    //home page cms routes
    Route::get('/home-page/edit', [HomePageContentController::class, 'edit'])->name('home-page.edit');
});
