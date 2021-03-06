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

Route::get('/', 'SaitController@index');
Route::post('/mail', 'SaitController@mail');

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::resource('/admin/setings', 'SetingsController');
    Route::resource('/admin/photo', 'PhotoController');
});
