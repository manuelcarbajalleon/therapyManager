<?php

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'ChildrenController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('children', 'ChildrenController');
Route::resource('therapists', 'TherapistsController');

// Provide controller methods with object instead of ID
Route::model('children', 'Child');
Route::model('therapists', 'Therapist');

// Use slugs rather than IDs in URLs
Route::bind('therapists', function($value, $route) {
	return App\Therapists::whereSlug($value)->first();
});
Route::bind('children', function($value, $route) {
	return App\Child::whereSlug($value)->first();
});
