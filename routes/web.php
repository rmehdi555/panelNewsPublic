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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'Admin\UserController@panel')->name('home');



Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware' => 'auth'],function (){

    Route::get('/','UserController@panel')->name('admin.users.panel');


    Route::resource('roles','RoleController');
    Route::resource('permissions','PermissionController');

    Route::resource('leveltickets','LevelTicketController');
    Route::resource('statustickets','StatusTicketController');
    Route::resource('categorytickets','CategoryTicketController');
    Route::resource('filetickets','FileController');
    Route::resource('tickets','TicketController');
    Route::resource('links','LinkController');
    Route::post('linksSearch','LinkController@search')->name('links.search');
    Route::get('linksSearch/{q}','LinkController@showSearch')->name('links.show.search');
    Route::resource('datas','DataController');
    Route::post('datasSearch','DataController@search')->name('datas.search');
    Route::get('datasSearch/{q}','DataController@showSearch')->name('datas.show.search');


    Route::get('answerticket/{id}','TicketController@answer')->name('tickets.answer');
    Route::post('storeanswer','TicketController@storeanswer')->name('tickets.storeAnswer');

    Route::get('userticket','UserController@userticket')->name('users.userticket.index');
    Route::get('userticketanswer/{id}','UserController@userticketanswer')->name('users.userticket.answer');
    Route::post('userstoreanswer','UserController@userstoreanswer')->name('usertickets.storeAnswer');


    Route::get('userprofile','UserController@userprofile')->name('users.userprofile.index');
    Route::get('userprofileedit/{id}','UserController@userprofileedit')->name('users.userprofile.edit');
    Route::put('userprofileedit/{id}','UserController@userprofileupdate')->name('users.userprofile.update');






    Route::group(['prefix'=>'users'],function (){

        Route::get('/','UserController@index')->name('admin.users.index');
        Route::delete('/{user}/destroy','UserController@destroy')->name('admin.users.destroy');
        Route::get('/{user}/edit','UserController@edit')->name('admin.users.edit');
        Route::put('/{user}/edit','UserController@update')->name('admin.users.update');



    });

});




