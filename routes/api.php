<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/siswa', 'SiswaController');
Route::get('/contoh2', 'SiswaController@hobi');
Route::get('/contoh3', 'SiswaController@jurusan');
Route::get('/contoh4', 'SiswaController@kelas');
Route::get('/contoh5', 'SiswaController@sekolah');
