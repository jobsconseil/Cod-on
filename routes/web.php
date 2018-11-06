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
Route::name('accueil')->get('accueil', 'Front\WelcomeController@index');
Route::name('contact')->get('contact', 'Front\WelcomeController@contact');



Auth::routes();

/*
 * Blog
 */
Route::prefix('blog')->namespace('Front\Blog')->group(function(){

    //Article
    Route::name('blog.create')->get('create', 'ArticleController@create');
    Route::name('blog.store')->post('store', 'ArticleController@store');
    Route::name('blog.edit')->get('edit/{id}', 'ArticleController@edit');
    Route::name('blog.update')->put('article/{id}', 'ArticleController@update');
    Route::name('blog')->get('blog', 'ArticleController@index');
    Route::name('blog.item')->get('show/{id}', 'ArticleController@show');

    //Commentaire
    Route::name('blog.store_cm')->post('store_cm', 'CommentaireController@store');
    Route::name('blog.update_cm')->put('commentaire/{id}', 'CommentaireController@update');

    //Reponse Commentaire
    Route::name('blog.store_rc')->post('store_rc', 'CommentaireController@store_rc');
    Route::name('blog.update_rc')->put('reponse_com/{id}', 'CommentaireController@update_rc');


});

/*
 * Collaborator
 */
Route::prefix('collaborator')->namespace('Front\Collaborator')->group(function(){

    //Collaborateur
    Route::name('collaborator.create')->get('create', 'CollaboratorController@create');
    Route::name('collaborator.store')->post('store', 'CollaboratorController@store');
    Route::name('collaborator.edit')->get('edit/{id}', 'CollaboratorController@edit');
    Route::name('collaborator.update')->put('article/{id}', 'CollaboratorController@update');
    Route::name('collaborator.all')->get('collaborator', 'CollaboratorController@index');
    Route::name('collaborator.item')->get('show/{id}', 'CollaboratorController@show');

    //Projet
    Route::name('collaborator.create')->get('create', 'ProjetController@create');
    Route::name('collaborator.store')->post('store', 'ProjetController@store');
    Route::name('collaborator.edit')->get('edit/{id}', 'ProjetController@edit');
    Route::name('collaborator.update')->put('article/{id}', 'ProjetController@update');
    Route::name('collaborator.all')->get('projet', 'ProjetController@index');
    Route::name('collaborator.item')->get('show/{id}', 'ProjetController@show');

});

/*
 * Forum
 */
Route::prefix('forum')->namespace('Front\Forum')->group(function(){

    //Subject
    Route::name('forum.create')->get('create', 'SujetController@create');
    Route::name('forum.store')->post('store', 'SujetController@store');
    Route::name('forum.edit')->get('edit/{id}', 'SujetController@edit');
    Route::name('forum.update')->put('article/{id}', 'SujetController@update');
    Route::name('forum.subject')->get('subject', 'SujetController@index');
    Route::name('forum.item')->get('show/{id}', 'SujetController@show');

    //Post
    Route::name('forum.create')->get('create', 'PostController@create');
    Route::name('forum.store')->post('store', 'PostController@store');
    Route::name('forum.edit')->get('edit/{id}', 'PostController@edit');
    Route::name('forum.update')->put('article/{id}', 'PostController@update');
    Route::name('forum.post')->get('post', 'PostController@index');
    Route::name('forum.item')->get('show/{id}', 'PostController@show');

    //Commentaire
    Route::name('forum.create_cm')->get('create', 'CommentaireController@create');
    Route::name('forum.store_cm')->post('store', 'CommentaireController@store');
    Route::name('forum.edit_cm')->get('edit/{id}', 'CommentaireController@edit');
    Route::name('forum.update_cm')->put('commentaire/{id}', 'CommentaireController@update');

    //Reponse Commentaire
    Route::name('forum.create_rc')->get('create', 'CommentaireController@create_rc');
    Route::name('forum.store_rc')->post('store', 'CommentaireController@store_rc');
    Route::name('forum.edit_rc')->get('edit/{id}', 'CommentaireController@edit_rc');
    Route::name('forum.update_rc')->put('reponse_com/{id}', 'CommentaireController@update_rc');


});

/*
 * Messenger
 */
Route::prefix('messenger')->namespace('Front\Messenger')->group(function(){

    Route::name('messenger.create')->get('create', 'MessageController@create');
    Route::name('messenger.store')->post('store', 'MessageController@store');
    Route::name('messenger.edit')->get('edit/{id}', 'MessageController@edit');
    Route::name('messenger.update')->put('message/{id}', 'MessageController@update');

});

/*
 * Evènement
 */
Route::prefix('evenement')->namespace('Front\Evenement')->group(function(){

    Route::name('evenement.create')->get('create', 'EvenementController@create');
    Route::name('evenement.store')->post('store', 'EvenementController@store');
    Route::name('evenement.edit')->get('edit/{id}', 'EvenementController@edit');
    Route::name('evenement.update')->put('article/{id}', 'EvenementController@update');
    Route::name('evenement.all')->get('event', 'EvenementController@index');
    Route::name('evenement.item')->get('show/{id}', 'EvenementController@show');

});

/*
 * Tag
 */
Route::prefix('tag')->namespace('Front\Tag')->group(function(){

    Route::name('tag.create')->get('create', 'TagController@create');
    Route::name('tag.store')->post('store', 'TagController@store');
    Route::name('tag.edit')->get('edit/{id}', 'TagController@edit');
    Route::name('tag.update')->put('article/{id}', 'TagController@update');
    Route::name('tag.all')->get('tag', 'TagController@index');
    Route::name('tag.item')->get('show/{id}', 'TagController@show');

});


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
