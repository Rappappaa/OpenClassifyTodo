<?php

use App\Http\Controllers\HomeController;
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

Route::get('/','HomeController@index')->name('home');
Route::get('/order-by-creating-ascending','HomeController@creating_asc')->name('creating_asc');
Route::get('/order-by-creating-descending','HomeController@creating_desc')->name('creating_desc');
Route::get('/order-by-updating-ascending','HomeController@updating_asc')->name('updating_asc');
Route::get('/order-by-updating-descending','HomeController@updating_dsec')->name('updating_desc');

Route::post('/search','HomeController@search')->name('search');

Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@login_action')->name('login_action');
Route::get('/register','UserController@register')->name('register');
Route::post('/register','UserController@register_action')->name('register_action');
Route::post('/logout','UserController@logout_action')->name('logout_action');

Route::get('/add-item','ItemController@additem')->name('additem');
Route::post('/add-item','ItemController@additem_action')->name('additem_action');
Route::post('/edit-item','ItemController@edititem')->name('edititem');
Route::post('/edit-item-action','ItemController@edititem_action')->name('edititem_action');

Route::post('/delete-item','ItemController@delete_item')->name('deleteitem');

Route::get('/admin','AdminController@index')->name('admin_index');

Route::get('/admin/users','AdminController@users')->name('admin_users');
Route::get('/admin/lists','AdminController@lists')->name('admin_lists');

