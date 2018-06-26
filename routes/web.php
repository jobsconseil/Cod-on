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

Route::get('/admin', function () {
    return view('Back.admin');
});


/*pages statiques*/
Route::name('contact')->get('contact', 'Front\WelcomeController@contact');


Auth::routes();

/*
| Register Authentifiaction
*/
Route::get('/confirm/{id}/{token}', 'Auth\Registercontroller@confirm');

/*
| Backend
*/
Route::name('admin')->get('/admin', 'Back\AdminController@index');
