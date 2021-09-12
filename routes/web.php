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
    return view('website.home');
});

Route::get('/gallery', function () {
    return view('website.gallery');
})->name("gallery");

Route::get('/about', function () {
    return view('website.about');
})->name("about");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
  Admin routes
 */

// Route::get('/dashboard', 'Admin/DashboardController@index')->name('dashboard');


 


//  Route::prefix("dashboard")->middleware("auth")->name("admin.")->namespace('Admin')->group(function(){
//     Route::get('/', 'Admin/DashboardController@index')->name('dashboard');
//     Route::get('/settings', 'SettingsController@index')->name('settings.index');
//     Route::post('/settings', 'SettingsController@update')->name('settings.update');

//  });





 Route::prefix("admin")->name("admin.")->namespace('Admin')->group(function(){

    // Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/home', 'AdminController@index')->name('dashboard');
    Route::get('/', 'LoginController@showLoginForm')->name('login.admin');
    Route::post('/', 'LoginController@login');
    Route::get('/datatable', 'DashboardController@datatable')->name('datatable');
    Route::get('/generalform', 'DashboardController@generalform')->name('generalform');
    Route::get('/advanceform', 'DashboardController@advanceform')->name('advanceform');
    Route::get('/errorpage', 'DashboardController@errorpage')->name('errorpage');
    Route::get('/blankpage', 'DashboardController@blankpage')->name('blankpage');
    Route::get('/notification', 'DashboardController@notification')->name('notification');
    

 });

