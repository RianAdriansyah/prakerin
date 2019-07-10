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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('artikel', 'ArtikelController');
// Route::resource('tag', 'TagController');
// Route::resource('kategori', 'KategoriAjax');

Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/tag', 'TagController');
});

