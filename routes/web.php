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


Route::group(['middleware' => ['auth']], function(){
Route::get('/users_infos/create_post', 'UserController@create_post');
Route::get('/users_infos/edit_users_info', 'UserController@edit_users_info');
Route::get('/users_infos/show_posts_list', 'UserController@show_posts_list');
Route::get('/users_infos/{post}/edit_post', 'UserController@edit_post');
Route::get('/users_infos/{post}', 'UserController@show_detail_post');
Route::put('/users_infos/{post}', 'UserController@update');


Route::get('/', 'UserController@index');
Route::get('/users_infos', 'UserController@index');

Route::post('/users_infos', 'UserController@store');

Route::get('/users_infos/show_detail_post', 'UserController@show_detail_post');
});
Auth::routes();

