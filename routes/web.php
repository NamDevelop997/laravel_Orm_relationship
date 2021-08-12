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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('products')->group(function () {
    Route::get('/', 'ProductController@show');
    Route::get('/add', 'ProductController@add');
    Route::get('/edit/{id}', 'ProductController@edit');
    Route::get('/delete/{id}', 'ProductController@delete');
    Route::get('/read', 'ProductController@read');
});

Route::prefix('posts')->group(function () {
    Route::get('/add', 'PostController@add');
    Route::get('/read', 'PostController@read');
});

Route::prefix('featured_img')->group(function () {
    Route::get('/read', 'FeaturedImageController@read');
});

Route::prefix('users')->group(function () {
    Route::get('add', 'UserController@add');
    Route::get('read', 'UserController@read');
    Route::get('show', 'UserController@show');
});

Route::prefix('roles')->group(function () {
    Route::get('show', 'RoleController@show');
    // Route::get('read', 'UserController@read');
});
