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
Route::get('/', 'HomeController@index')->name('index');

Route::get('/home', 'HomeController@index');

Route::get('/admin','AdminController@index');
// Route::post('/admin-dashboard','AdminController@dashboard')->name('admin.dashboard');
// Route::get('/logout','AdminController@logout');

//tkb
Route::get('/add-tkb','TkbController@add_tkb')->name('tkb.add');
Route::post('/save-tkb','TkbController@save_tkb')->name('tkb.save');
Route::get('/all-tkb','TkbController@all_tkb')->name('tkb.all');

Route::get('/edit-tkb/{MaTKB}','tkbController@edit_tkb')->name('tkb.edit');
Route::post('/update-tkb/{MaTKB}','tkbController@update_tkb')->name('tkb.update');
Route::get('/delete-tkb/{MaTKB}','tkbController@delete_tkb')->name('tkb.delete');

//pmt
Route::get('/add-pmt','PMTController@add_pmt')->name('pmt.add');
Route::post('/save-pmt','PMTController@save_pmt')->name('pmt.save');
Route::get('/all-pmt','PMTController@all_pmt')->name('pmt.all');

Route::get('/edit-pmt/{MaPMT}','PMTController@edit_pmt')->name('pmt.edit');
Route::post('/update-pmt/{MaPMT}','PMTController@update_pmt')->name('pmt.update');
Route::get('/delete-pmt/{MaPMT}','PMTController@delete_pmt')->name('pmt.delete');
//mt
Route::get('/add-mt','MTController@add_mt')->name('mt.add');
Route::post('/save-mt','MTController@save_mt')->name('mt.save');
Route::get('/all-mt','MTController@all_mt')->name('mt.all');

Route::get('/edit-mt/{MaMT}','MTController@edit_mt')->name('mt.edit');
Route::post('/update-mt/{MaMT}','MTController@update_mt')->name('mt.update');
Route::get('/delete-mt/{MaMT}','MTController@delete_mt')->name('mt.delete');

//tkb
//Route::get('tkb/{tkb_id}','HomeController@show_tkb')->name('tkb');

//singlepost
//Route::get('post/{post_id}','HomeController@show_post')->name('post.index');

//search
//Route::get('tim-kiem','HomeController@search')->name('search');