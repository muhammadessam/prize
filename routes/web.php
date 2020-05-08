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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->prefix('admin')->group(function () {

    /* Dashboard Route */
    Route::get('/dashboard', 'Admin\DashBoardController@index')->name('dashboardHome');

    // questions
    Route::resource('questions', 'Admin\QuestionController');

    // Gifts
    Route::resource('gifts', 'Admin\GiftController');

});
