<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@index');

// Route::get('/teams/{league}', 'TeamsController@teams');

Route::get('/matchresult/{league}', 'ResultsController@results');


Route::get('/log-table/{league}', 'LogController@log');

Route::resource('teams', 'TeamController');
Route::resource('players', 'PlayerController');
Route::resource('goals', 'GoalController');
Route::resource('fixtures', 'FixtureController');


Route::get('/fixturedetail', function () {
    return view('Pages/fixturedetail');
});
Auth::routes();

// Route::get('/', 'HomeController@index');

// Route::get('/home', 'HomeController@index')->name('home');
