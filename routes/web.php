<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

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

Route::get('/', function () {
    return view('home/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route Culture

Route::get('/wisata', [WisataController::class, 'index']);

Route::get('/wisata/{slug}', [WisataController::class, 'kategori']);

Route::get('/wisata/{k}/{d}', [WisataController::class, 'artikel']);

// Route Contact
Route::get('/contact', function () {
    return view('contact/contact');
});

// Route Profil
Route::get('/profil', function () {
    return view('profil/profil');
});


// // Route Auth
Route::group(['middleware' => ['auth']], function () {
    // Route Dashboard

    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Route Kategori
    Route::resource(
        '/kategori',
        KategoriController::class
    );
    Route::get('/kategori/{id}/konfirmasi', [KategoriController::class, 'konfirmasi']);
    Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);

    // Route Post
    Route::resource('/post', PostController::class);
    // Route::get('/post/create', [PostController::class, 'create']);
    // Route::get('/post/create', function () {
    //     return view('post/create');
    // });
    Route::get('/post/{id}/konfirmasi', [PostController::class, 'konfirmasi']);
    Route::get('/post/{id}/delete', [PostController::class, 'delete']);
});
Auth::routes();
