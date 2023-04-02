<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TechnologyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Auth::routes([
    'register' => false, 
]);

Route::get('test', function () {
    symlink('/home/bhpigov1/public_html/storage','/home/bhpigov1/website/storage/app/public');
});

// Auth::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Auth::post('login', 'Auth\LoginController@login');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/notices', [HomeController::class, 'notices'])->name('notices.index');
Route::get('/gallery/{type}', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/technology/{technology:slug}', [TechnologyController::class, 'show'])->name('technology.show');