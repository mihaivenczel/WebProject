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
    Route::get('webproject/{slug}', ['as' => 'blog.single', 'uses' => 'App\Http\Controllers\BlogController@getSingle'])->where('slug', '[w\d\-\_]+');
    Route::get('blog',['uses'=>'App\Http\Controllers\BlogController@getIndex', 'as'=>'blog.index']);
    Route::get('/', 'App\Http\Controllers\PageController@getIndex');
    Route::get('about', 'App\Http\Controllers\PageController@getAbout');
    Route::resource('/posts', 'App\Http\Controllers\PostController');
});
