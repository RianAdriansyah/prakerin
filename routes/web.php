<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/category', function () {
    return view('category');
});


Route::get('/siswa', function () {
    return view('siswa');
});

Route::get('/ajax/kategori', function () {
    return view('backend/ajax/kategori/index');
});

Route::get('/ajax/tag', function () {
    return view('backend/ajax/tag/index');
});

Route::get('/ajax/artikel', function () {
    return view('backend/ajax/artikel/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('artikel', 'ArtikelController');
// Route::resource('tag', 'TagController');
// Route::resource('kategori', 'KategoriAjax');

Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/tag', 'TagController');
    Route::resource('/rekomendasi', 'RekomendasiController');
});
Route::resource('/', 'FrontendController');
Route::get('/news', 'FrontendController@allblog')->name('news');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/{artikel}', 'FrontendController@detailblog')->name('single');
Route::get('/news/{artikel}', 'FrontendController@detailblog')->name('newssingle');
Route::get('/rekomendasi/{artikel}', 'FrontendController@detailblog')->name('rekomendasi');
Route::get('/category/{cat}', 'FrontendController@blogcat')->name('category');
Route::get('/tag/{tag}', 'FrontendController@blogtag')->name('tag');
