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

Route::get('/',         'Controller@index')->name('welcome');
Route::get('home',      'HomeController@index')->name('home');

Auth::routes();

Route::group([
    'prefix'    => 'socialite',
    'namespace' => 'Socialite',
], function () {
    Route::get('github',           'GithubController@index')->name('socialite.github');
    Route::get('github/callback',  'GithubController@callback')->name('socialite.github.callback');
});
