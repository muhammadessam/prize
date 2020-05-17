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


Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contactUs', 'HomeController@contactUsGet')->name('contact.get');
Route::post('/contactUs', 'HomeController@contactUsPost')->name('contact.post');
Route::get('/visitorQuestions', 'Admin\QuestionController@visitorQuestions')->name('visitorQuestions');
Route::get('/result/{res}', 'HomeController@getPrize')->name('prize.get');
Route::post('/gift/{gift}', 'HomeController@getGift')->name('get.single.prize');
Route::post('/offerCallback', 'HomeController@offerCallback');

Route::middleware('auth')->prefix('admin')->group(function () {

    /* Dashboard Route */
    Route::get('/dashboard', 'Admin\DashBoardController@index')->name('dashboardHome');

    // questions
    Route::prefix('questions')->group(function () {
        Route::resource('questions', 'Admin\QuestionController');
    });

    // Gifts
    Route::prefix('gifts')->group(function () {
        Route::resource('gifts', 'Admin\GiftController');
    });


    //settings
    Route::prefix('settings')->group(function () {
        Route::resource('settings', 'Admin\SettingController');
    });

    //Banner
    Route::prefix('banners')->group(function () {
        Route::resource('banners', 'Admin\BannerController')->except(['store', 'create', 'destroy']);
    });

    Route::prefix('contact')->group(function () {
        Route::resource('contact', 'Admin\ContactUsController');
        Route::get('/respondTo/{contact}', 'Admin\ContactUsController@respondGet')->name('respond.get');
        Route::post('/respondTo/{contact}', 'Admin\ContactUsController@respondPost')->name('respond.post');
    });

    Route::prefix('codeScript')->group(function () {
        Route::get('/changeCode', 'Admin\SettingController@changeCodeGet')->name('code.get');
        Route::post('/changeCode', 'Admin\SettingController@changeCodePost')->name('code.post');
    });

});
