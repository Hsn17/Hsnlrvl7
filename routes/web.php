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

Route::get('/', function () {
    return view('welcome');
});

Route::view('about','front.about');

Route::get('user/{id}', function ($id) {
    return 'User Id:'.$id;

});

Route::view('Hsn7','Hsn.Hsn7');

Route::resource('posts','PostController');

Route::get('users/show','UserController@show');


 