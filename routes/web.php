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

Auth::routes(['register' => false]);
Route::post('logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::post('storage-link', [FrontendController::class, 'storageLink'])->name('storage.link');

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/services/{name}', [FrontendController::class, 'services'])->name('services');

Route::post('/contact', [FrontendController::class, 'sendContactEmail'])->name('contact');
Route::get('/partners', [FrontendController::class, 'partners'])->name('partners');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact-page');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');

Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog-details', [FrontendController::class, 'blogsDetails'])->name('blogs-details');

//Privacy Policy
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/cookie-policy', [FrontendController::class, 'cookiePolicy'])->name('cookie-policy');
Route::get('/terms-of-website-use', [FrontendController::class, 'termsOfWebsiteUse'])->name('terms-of-website-use');
