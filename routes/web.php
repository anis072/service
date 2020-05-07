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

Route::get('/','AdminController@login', function () {
    return view('welcome');
});
Route::get('/','IndexController@index');

Auth::routes();
//Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get', 'post'], '/admin', 'AdminController@login');
Route::get('/admin','AdminController@login');
Route::get('/admin/setting','AdminController@setting');
Route::get('/admin/chek_pwd','AdminController@checkpwd');
Route::match(['get', 'post'], '/admin/update_pwd', 'AdminController@updatePwd');
Route::get('/admin/dashbord','AdminController@dashbord');
Route::get('/logout','AdminController@logout');
 //CategoryController
Route::match(['get', 'post'], '/admin/add-category','CategoryController@addCategory');
Route::get('/admin/view-category','CategoryController@viewCategories');
Route::match(['get', 'post'], '/admin/edit-category/{id}','CategoryController@editCategory');
Route::match(['get', 'post'], '/admin/delete-category/{id}','CategoryController@deleteCategory');
//ServiceContoller
Route::match(['get', 'post'], '/admin/add-service','ServiceController@addservice');
Route::get('/admin/view-service','ServiceController@viewservices');
Route::match(['get', 'post'], '/admin/edit-service/{id}','ServiceController@editservice');
Route::get('admin/delete-image/{id}', 'ServiceController@deleteImage');
Route::get('admin/delete-service/{id}', 'ServiceController@deleteservice');


