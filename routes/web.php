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

Route::get('/', function () {
    return view('index');
});

Route::get('/score-create', function () {
    return view('score-create');
})->name('score-create');

Route::get('score-history', 'App\Http\Controllers\ScoreController@scoreHistory')->name('score-history');
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('index');
})->name('index');

Route::post('/', 'App\Http\Controllers\ScoreController@store')->name('store');
