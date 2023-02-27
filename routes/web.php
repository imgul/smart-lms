<?php

use Illuminate\Support\Facades\Route;

// Controller Classes
use App\Http\Controllers\Front\FrontController;

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

// Front Routes with Controller Group
Route::controller(FrontController::class)->name('front.')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog-single', 'blog_single')->name('blog-single');
    Route::get('/contact', 'contact')->name('contact');
});
