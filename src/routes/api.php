<?php

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

Route::get('/user', function () {
	return Auth::user();
})->name('user');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/items', 'QiitaController@getItems')->name('getItems');
Route::get('/tags', 'QiitaController@getTags')->name('getTags');
Route::post('/tag', 'QiitaController@addTag')->name('addTag');
Route::delete('/tag', 'QiitaController@deleteTag')->name('deleteTag');
Route::post('/importQiita', 'QiitaController@import')->name('import');