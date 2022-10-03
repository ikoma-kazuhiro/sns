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
Route::get('/sns_users/edit_user_info', 'Sns_userController@edit_user_info');
Route::get('/sns_users/show_posts_list', 'Sns_userController@show_posts_list');
Route::get('/sns_users/{post}/edit_post', 'Sns_userController@edit_post');
Route::get('/sns_users/{post}', 'Sns_userController@show_detail_post');
Route::put('/sns_post/{post}', 'Sns_userController@update')->name('post_update');
Route::get('/sns_users/create_post', 'Sns_userController@create_post');



Route::get('/', 'Sns_userController@index');
Route::get('/sns_users', 'Sns_userController@index');
Route::post('/sns_users', 'Sns_userController@store');
Route::get('/sns_users/show_detail_post', 'Sns_userController@show_detail_post');
});
Auth::routes();

