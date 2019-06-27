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
Route::group(['middleware' => ['web']], function (){





	//Authentication Routes
	Route::get('auth/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('auth/login', 'Auth\LoginController@Login');
	Route::get('auth/logout', 'Auth\LoginController@Logout')->name('logout');

	//Regstration Routes
	Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('auth/register', 'Auth\RegisterController@register');

	// Password Reset Routes...
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset');
	Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

	

	//Pages Routes
	Route::get('contact', 'PagesController@getContact');
	Route::get('about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');

	//Club Routes
	
	//Route::get('clubs/jet','JetController@create');

	/*Route::resource('jets', 'JetController', ['only' => ['index', 'create', 'store']] )->names([
    'index'   => 'jets.index',
    'store'   => 'jets.store',
    'create'  => 'jets.create',
    'show'    => 'jets.show',
    'update'  => 'jets.update',
    'destroy' => 'jets.destroy',
    'edit'    => 'jets.edit',
	]);*/

	Route::resource('redcrosses', 'RedcrossController', ['only' => ['index', 'create', 'store']]);
	Route::resource('sciences', 'ScienceController', ['only' => ['index', 'create', 'store']]);
	Route::resource('icts', 'IctController', ['only' => ['index', 'create', 'store']]);
	Route::resource('presses', 'PressController', ['only' => ['index', 'create', 'store']]);
	Route::resource('brownies', 'BrownieController', ['only' => ['index', 'create', 'store']]);
	Route::resource('scrabbles', 'ScrabbleController', ['only' => ['index', 'create', 'store']]);
	Route::resource('ballets', 'BalletController', ['only' => ['index', 'create', 'store']]);
	Route::resource('karates', 'KarateController', ['only' => ['index', 'create', 'store']]);
	Route::resource('chesses', 'ChessController', ['only' => ['index', 'create', 'store']]);
	Route::resource('swimmings', 'SwimmingController', ['only' => ['index', 'create', 'store']]);
	Route::resource('frenches', 'FrenchController', ['only' => ['index', 'create', 'store']]);
	Route::resource('baskets', 'BasketController', ['only' => ['index', 'create', 'store']]);
	Route::resource('musics', 'MusicController', ['only' => ['index', 'create', 'store']]);
	Route::resource('roads', 'RoadController', ['only' => ['index', 'create', 'store']]);
	Route::resource('tables', 'TableController', ['only' => ['index', 'create', 'store']]);

});

