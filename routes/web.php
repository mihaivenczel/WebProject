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
Route::group(['middleware' => ['web']], function () {
    //Auth routes
    Route::get('auth/login', 'Auth\AuthController@showLoginForm');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@postLogout');

    //Register routes
    Route::get('auth/logout','Auth\RegisterController@showRegistrationForm');
    Route::post('auth/logout','Auth\AuthController@postRegister');


    //Everything else
    Route::get('webproject/{slug}', ['as' => 'blog.single', 'uses' => 'App\Http\Controllers\BlogController@getSingle'])->where('slug', '[w\d\-\_]+');
    Route::get('blog', ['uses' => 'App\Http\Controllers\BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('/', 'App\Http\Controllers\PageController@getIndex');
    Route::get('about', 'App\Http\Controllers\PageController@getAbout');
    Route::resource('/posts', 'App\Http\Controllers\PostController');
});
