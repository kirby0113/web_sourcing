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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/toppage','toppageController@index');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mypage','mypageController@index');
Route::get('/work_detail','work_detailController@index');
Route::get('/select','selectController@index');

Route::prefix('contractor')->namespace('Contractor')
        ->name('contractor.')->group(function(){
    Route::get('/toppage','ToppageController@index')->name('toppage');
    Route::get('/category_search_result','Search_resultController@category_search')->name('category_search');
    Route::get('/word_search_result','Search_resultController@work_search')->name('work_search');
    Route::get('/mypage','MypageController@index')->name('mypage');
    Auth::routes();
    Route::get('/logout',   'Auth\logoutController@logout')->name('contractor.logout');
});

Route::prefix('client')->namespace('Client')
        ->name('client.')->group(function(){
    Route::get('/toppage','ToppageController@index')->name('toppage');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('client_home');
});
Auth::routes();

