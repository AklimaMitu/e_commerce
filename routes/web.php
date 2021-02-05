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

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify')->name('login.verify');
Route::get('/logout','LoginController@logout')->name('logout');

Route::get('/admin','AdminController@index')->name('Admin.index');

Route::get('/admin/addProduct','ProductController@add')->name('Product.addProudct');
Route::post('/admin/addProduct','ProductController@store')->name('Product.store');

Route::get('/admin/deleteProduct','ProductController@delete')->name('Product.delete');
Route::post('/admin/deleteProduct','ProductController@deleteProductShow')->name('Product.deleteProductShow');
Route::get('/admin/deleteProduct/Confirm/{id}','ProductDeleteController@destroy')->name('Product.destroy');

Route::get('/admin/updateProduct','ProductController@update')->name('Product.update');
Route::post('/admin/updateProduct','ProductController@UpdateProductShow')->name('Product.UpdateProductShow');
Route::get('/admin/editProduct/{id}','ProductController@edit')->name('Product.edit');
Route::post('/admin/editProduct/{id}','ProductController@editConfirm')->name('Product.editConfirm');

Route::get('/admin/addCategory','ProductCategoryController@addCategory')->name('Category.addCategory');
Route::post('/admin/addCategory','ProductCategoryController@insertCategory')->name('Category.insertCategory');


Route::get('/admin/deleteCategory','ProductCategoryController@delete')->name('Category.delete');
Route::get('/admin/deleteCategory/{id}','ProductCategoryController@destroy')->name('Category.destroy');

Route::get('/admin/updateCategory','ProductCategoryController@update')->name('Category.update');
Route::get('/admin/updateCategory/{id}','ProductCategoryController@edit')->name('Category.edit');
Route::post('/admin/updateCategory/{id}','ProductCategoryController@editConfirm')->name('Category.editConfirm');


