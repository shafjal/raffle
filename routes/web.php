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
//Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Raffel entry 
Route::get('/raffle-entry', 'HomeController@index')->name('raffle.index');
Route::post('/raffle-entry', 'HomeController@store')->name('raffle.store');
Route::get('/raffle-draw', 'HomeController@draw_index')->name('draw.index');
Route::get('/raffle-draw-again', 'HomeController@draw_again_index')->name('draw.again.index');
Route::post('/raffle-draw/{id}', 'HomeController@draw_delete')->name('draw-delete');
Route::get('/raffle-winner', function () {
    return view('winner');
})->name('winner-table');
Route::get('/dashboard-admin', 'HomeController@admin')->name('raffle.admin');