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
Route::get('/users_infos/create_users_info', 'UserController@create_users_info');
Route::get('/users_infos/edit_users_info/{users_info}', 'UserController@edit_users_info');
Route::put('/users_infos/edit_users_info/{users_info}', 'UserController@update_users_info');
Route::get('/users_infos/show_posts_list', 'UserController@show_posts_list');
Route::get('/users_infos/show_detail_post', 'UserController@show_detail_post');
Route::get('/users_infos/show_detail_user', 'UserController@show_detail_user');
Route::get('/users_infos/show_detail_user/{users_info}', 'UserController@show_detail_user_info');
Route::get('/users_infos/show_users_list', 'UserController@show_users_list');
Route::get('/users_infos/{post}/edit_post', 'UserController@edit_post');
Route::get('/users_infos/{post}', 'UserController@show_detail_post')->name('show_detail_post');
Route::put('/users_infos/{post}', 'UserController@update_post')->name('post_update');

Route::delete('/users_infos/{post}', 'UserController@delete');

Route::post('/users_infos/create_users_info', 'UserController@store_users_info');
Route::post('/users_infos/create_post', 'UserController@store_post');

Route::post('/comments/store', 'CommentController@store');
Route::get('/comments/{post}', 'CommentController@show_comments');

Route::get('/image_test', 'ImageTestController@index');
Route::post('/image_test/store', 'ImageTestController@store');

Route::get('/test', 'UserController@test_index');

Route::get('/slider', 'UserController@slider');

Route::get('/', 'UserController@index');
Route::get('/users_infos', 'UserController@index');

});
Auth::routes();

