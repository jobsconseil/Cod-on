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


/*pages statiques*/
Route::name('contact')->get('contact', 'Front\WelcomeController@contact');


Auth::routes();

/*
 * Messenger
 */


/*
 * Evènement
 */



/*
 * Tag
 */



/*
| Register Authentifiaction
*/
Route::get('/confirm/{id}/{token}', 'Auth\Registercontroller@confirm');

/*
| Backend
*/
Route::name('admin')->get('/admin', 'Back\AdminController@index');

Route::prefix('admin')->namespace('Back')->group( function(){

    Route::resource('categorie', 'CategorieController');
    Route::resource('Theme', 'ThemeController');
    Route::resource('stat', 'StatController');
    Route::name('compte.show')->get('compte/{id}', 'UserController@show');

    Route::middleware('editeur')->group( function(){

        Route::name('editeur.edit')->get('{id}/edit', 'UserController@edit');
        Route::name('editeur.update')->put('editeur/{id}', 'UserController@update');
    });

});


Route::prefix('admin')->middleware('admin')->namespace('Back')->group( function(){

    Route::name('editeur.store')->post('editeur', 'UserController@store');

    Route::resource('users', 'UserController',['only' => [
        'index', 'destroy'
    ]]);

});
