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

// Route::post('/user/register','APIRegisterController@register');
// Route::post('/user/login','APIloginController@login');
Route::resource('products', 'ProductController'); 
 Route::get('/', 'ProductController@index'); 
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
