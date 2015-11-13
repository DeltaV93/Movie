<?php
use App\Movie;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Main Page 
Route::get('/', function(){
  return redirect('/metamovies');
});
Route::get('metamovies', 'MovieController@index');
Route::get('metamovies/{slug}', 'MovieController@showMovie');

// Search 

// USER LOGIN
Route::get('login', function() {
	return view('layout/login');
});

Route::post('login', function() {
	return 'Username:'.$_POST["username"].',Password: '.$_POST["password"];
});
// ADMIN PAGE

// Route::get('admin', function() {

// });
Route::resource('admin', 'AdminController');
Route::post('admin/create', 'AdminController@store');
Route::post('admin/{slug}', 'AdminController@store');



// ADMIN LOGIN
$router->group([
  'middleware' => 'auth',
], function () {
  resource('admin', 'AdminController');
  get('admin/add', 'AdminController@index');
});

// Logging in and out
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');