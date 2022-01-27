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

Route::get('/', 'FrontendController@index');

Route::get('/admin/index','Admin\AdminController@index')->name('index');

//route category
Route::get('/admin/category/index','Admin\CategoryController@index')->name('category');
//route room
Route::get('/admin/Room/index','RoomController@index')->name('room');
Route::post('/admin/Room/create','RoomController@create');
Route::get('/admin/Room/edit/{id}','RoomController@edit');
Route::post('/admin/Room/update/{id}' ,'RoomController@update');
Route::get('/Admin/Room/delete/{id}' , 'RoomController@delete');
//route contents
Route::get('/admin/Contents/index','Admin\ContentsController@index')->name('contents');
Route::post('/admin/Contents/create','Admin\ContentsController@create');
Route::get('/admin/Contents/edit/{id}','Admin\ContentsController@edit');
Route::post('/admin/Contents/update/{id}' ,'Admin\ContentsController@update');
Route::get('/Admin/Contents/delete/{id}' , 'Admin\ContentsController@delete');
//route headers
Route::get('/admin/Headers/index','HeadersController@index')->name('header');
Route::post('/admin/Headers/create','HeadersController@create');
Route::get('/admin/Headers/edit/{id}','HeadersController@edit');
Route::post('/admin/Headers/update/{id}' ,'HeadersController@update');
Route::get('/Admin/Headers/delete/{id}' , 'HeadersController@delete');
Route::get('/status/update', 'HeadersController@updateStatus')->name('header.update.status');
//route body
Route::get('/admin/Details/index','DetailsController@index')->name('details');
Route::post('/admin/Details/create','DetailsController@create');
Route::get('/admin/Details/edit/{id}','DetailsController@edit');
Route::post('/admin/Details/update/{id}' ,'DetailsController@update');
Route::get('/Admin/Details/delete/{id}' , 'DetailsController@delete');

//route footer
Route::get('/admin/Footer/index','FooterController@index')->name('footer');
Route::post('/admin/Footer/create','FooterController@create');
Route::get('/admin/Footer/edit/{id}','FooterController@edit');
Route::post('/admin/Footer/update/{id}' ,'FooterController@update');
Route::get('/Admin/Footer/delete/{id}' , 'FooterController@delete');

//route user
Route::get('/admin/User/index','UserController@index')->name('user');
Route::get('/admin/User/edit/{id}','UserController@edit');
Route::post('/admin/User/update/{id}' ,'UserController@update');
Route::get('/Admin/User/delete/{id}' , 'UserController@delete');

//route frontend
Route::get('/frontend' , 'FrontendController@index');



//route product
Route::get('/admin/product/index','Admin\ProductController@index')->name('product');

Auth::routes();
Route::get('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');
