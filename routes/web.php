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

Route::get('score-history', 'App\Http\Controllers\ScoreController@scoreHistory')->name('score-history');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('score-create');
})->name('score-create');

Route::post('/', 'App\Http\Controllers\ScoreController@store')->name('store');
