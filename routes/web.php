<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('index');
});



Route::get('/score-create', 'App\Http\Controllers\ScoreController@scoreCreate')->name('score-create');

Route::get('score-history', 'App\Http\Controllers\ScoreHistoryController@scoreHistory')->name('score-history');
Route::get('score-history/{score}', 'App\Http\Controllers\ScoreHistoryController@detail')->name('history-detail');



Route::post('/score-store', 'App\Http\Controllers\ScoreController@store')->name('store');
