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
    return view('welcome');
});

Route::get('index',[
	'as'=>'trang_chu',
	'uses'=>'PageController@getIndex'

]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses' =>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham',[
	'as'=>'chitietsanpham',
	'uses' =>'PageController@getChiTiet'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses' =>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses' =>'PageController@getGioiThieu'
]);