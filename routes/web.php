<?php

use Illuminate\Support\Facades\Route;

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
USE App\Http\Controllers\HomeController;
USE App\Http\Controllers\NewsController;
USE App\Http\Controllers\AboutController;
USE App\Http\Controllers\ContactController;


//route biasa
Route::get('/',[HomeController::class, 'home']);

//route prefix
Route::prefix('category')->group( function(){
    Route::get('/marbel-edu-games', function(){
        return 'Halaman ini menampilkan kategori Marbel Education Games';
     });
    Route::get('/marbel-and-friends-kids-games', function(){
        return 'Halaman ini menampilkan kategori Marbel And Friends Kids Games';
     });
    Route::get('/riri-story-books', function(){
        return 'Halaman ini menampilkan kategori Riri Story Books';
     });
    Route::get('/kolak-kids-songs', function(){
        return 'Halaman ini menampilkan kategori Kolak Kids Songs';
     });
});

//route parameter
Route::get('/news/{berita}',[NewsController::class, 'news']);

//route prefix
Route::prefix('program')->group( function(){
    Route::get('/karir', function(){
        return 'Halaman ini menampilkan program karir';
    });
    Route::get('/magang', function(){
        return 'Halaman ini menampilkan program magang';
    });
    Route::get('/kunjungan-industri', function(){
        return 'Halaman ini menampilkan program kunjungan industri';
    });
});

//route biasa
Route::get('/about-us',[AboutController::class, 'about']);

// route resource
Route::resource('/contact-us', ContactController::class,[
    'only'=> ['index', 'create', 'store']
]);
