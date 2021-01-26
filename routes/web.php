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
Route::get('/enter','EnterController@index');

Route::prefix('contractor')->namespace('Contractor')
        ->name('contractor.')->group(function(){
            Route::middleware('auth:contractor')->group(function(){
    Route::get('/toppage','ToppageController@index')->name('toppage');
    Route::get('/category_search_result','Search_resultController@category_search')->name('category_search');
    Route::get('/word_search_result','Search_resultController@word_search')->name('word_search');
    Route::get('/mypage','MypageController@index')->name('mypage');
    Route::get('/work_detail','WorkDetailController@index')->name('work_detail');
    Route::get('/request','RequestController@index')->name('request');
    Route::post('/request_create','RequestController@store')->name('request_create');
    Route::get('/message_room_list','Message_Room_ListController@index')->name('message_room_list');
    Route::get('/message_room','Message_RoomController@index')->name('message_room');
    Route::post('/message_create','MessageController@store')->name('message_create');
            });
    Auth::routes();
    Route::get('/logout','Auth\logoutController@logout')->name('contractor.logout');
});

Route::prefix('client')->namespace('Client')
        ->name('client.')->group(function(){
            Route::middleware('auth:client')->group(function(){
    Route::get('/toppage','ToppageController@index')->name('toppage');
    Route::get('/mypage','MypageController@index')->name('mypage');
    Route::get('/request_detail','RequestDetailController@index')->name('request_detail');
    Route::get('/contractor_show','MypageController@show')->name('contractor_show');
    Route::get('/message_room_create','Message_RoomController@store')->name('message_room_create');
    Route::get('/message_room','Message_RoomController@index')->name('message_room');
    Route::post('/message_create','MessageController@store')->name('message_create');
    Route::get('/message_room_list','Message_Room_ListController@index')->name('message_room_list');


});
    Auth::routes();
    Route::get('/logout', 'Auth\LogoutController@logout')->name('client.logout');
});
Auth::routes();

