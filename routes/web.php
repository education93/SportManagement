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

Route::post('/add/team', 'TeamController@store');
Route::resource('teams', 'TeamController');

Route::post('/add/player/team', 'PlayerController@store');
Route::resource('players', 'PlayerController');

Route::resource('goals', 'GoalController');

Route::post('/create/fixture/store', 'FixtureController@store');
Route::resource('fixtures', 'FixtureController');

Route::post('add/venue', 'VenueController@store');
Route::resource('venue', 'VenueController');

Route::post('referee/create/store', 'RefereeController@store');
Route::resource('referee', 'RefereeController');

Route::post('score/create/store', 'ScoreController@store');
Route::resource('score', 'ScoreController');

Route::post('league/create/store', 'LeaguesController@store');
Route::resource('league', 'LeaguesController');

Route::get('/fixturedetail', function () {
    return view('Pages/fixturedetail');
});
Auth::routes();

// Route::get('/', 'HomeController@index');

Route::get('/home', 'PagesController@index');
Route::get('/admin', 'PagesController@admin');
