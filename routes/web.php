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

//Route::get('/', function (){
  //  return view('news.index');
//});

// Frontend Routing
// Route::get('/','NewsController@index');
Route::get('/','NewsController@index');
Route::get('news/category/{id}','NewsController@category');
Route::get('news/detail/{id}','NewsController@detail');

// Admin Routing
Route::get('admin','admin\AdminController@index');
Route::post('admin/login_check','admin\AdminController@login_check');
Route::get('admin/add-news','admin\AdminController@add');
Route::post('admin/store-news','admin\AdminController@store_news');
Route::get('admin/edit-news/{id}','admin\AdminController@edit');
Route::post('admin/update-news/{id}','admin\AdminController@update_news');
Route::get('admin/news/delete/{id}','admin\AdminController@delete');

// Category Routing
Route::get('admin/category','admin\CategoryController@index');
Route::get('admin/category/add','admin\CategoryController@add');
Route::post('admin/category/store_category','admin\CategoryController@store_category');
Route::get('admin/category/edit/{id}','admin\CategoryController@edit');
Route::post('admin/category/update_category/{id}','admin\CategoryController@update_category');
Route::get('admin/category/delete/{id}','admin\CategoryController@delete');

Route::get('admin/signin','admin\AdminController@signin');
Route::get('admin/signout','admin\AdminController@signout');
