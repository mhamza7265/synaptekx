<?php

use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });

// Route::get('storage-link', [FrontendController::class, 'storageLink'])->name('storage.link');

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/services', [FrontendController::class, 'services'])->name('services');

Route::post('/contact', [FrontendController::class, 'sendContactEmail'])->name('contact');

Route::get('/partners', [FrontendController::class, 'partners'])->name('partners');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact-page');

Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
