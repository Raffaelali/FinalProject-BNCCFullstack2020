<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/sign', 'SignController@index')->name('signs.index');
Route::get('/sign/{class}', 'SignController@index')->name('signs.toggle');

Route::prefix('post')->middleware('auth')->group(function () {
    Route::get('{post}', 'PostController@show')->name('posts.show')->withoutMiddleware('auth');
    Route::get('', 'PostController@index')->name('posts.index')->withoutMiddleware('auth');
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::post('', 'PostController@store')->name('posts.store');
    Route::patch('{post}', 'PostController@update')->name('posts.update');
    Route::delete('{post}', 'PenggunasController@destroy')->name('posts.delete');
    Route::get('{post}/edit', 'PostController@edit')->name('posts.edit');
});
// Route::resource('post', 'PostController');

Auth::routes();
