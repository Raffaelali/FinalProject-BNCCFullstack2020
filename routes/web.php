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


Route::get('topik/{topik}', 'TopikController@show')->name('topiks.show');


Route::prefix('post')->group(function () {
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::post('/', 'PostController@store')->name('posts.store');
    Route::get('/{post}', 'PostController@show')->name('posts.show');
    Route::patch('/{post}', 'PostController@update')->name('posts.update');
    Route::delete('/{post}', 'PenggunasController@destroy')->name('posts.delete');
    Route::get('/{post}/edit', 'PostController@edit')->name('posts.edit');
});
// Route::resource('post', 'PostController');

Route::get('comment', 'CommentController@create')->name('comment.index');
Route::get('comment/{post}', 'CommentController@create')->name('comment.create');
Route::post('/', 'CommentController@store')->name('comment.store');
Auth::routes();
