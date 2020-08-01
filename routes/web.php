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




/*
Route::get('/paket', 'PaketController@index');
//ini untuk routing
Route::post('/paket/create','PaketController@create');
//ini untuk edit
Route::get('/paket/{id}/edit','PaketController@edit');
//ini untuk update
Route::post('/paket/{id}/update','PaketController@update');
//ini untuk delete
Route::get('/paket/{id}/delete','PaketController@delete');
*/
/*
Route::get('/', function () {
    return view('/layouts/tampilandepan');
});*/

Route::get('/', 'HomeController@beranda' ); 
Route::get('/abouts', 'HomeController@about' ); 
Route::get('/photography', 'HomeController@photography' ); 
Route::get('/contact', 'HomeController@contact' ); 
Route::get('/event', 'HomeController@event' );






//untuk login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


//otentikasi login
Route::group(['middleware' => 'auth'], function(){






Route::get('/about', function () {
    return view('/layouts/about');
});


Route::get('/paket/export/', 'PaketController@export');
Route::get('/paket/exportPdf/', 'PaketController@exportPdf');
Route::get('/customer/export', 'CustomerController@export');
Route::get('/customer/exportPdf', 'CustomerController@exportPdf');
Route::get('/owner/export', 'OwnerController@export');
Route::get('/owner/exportPdf', 'OwnerController@exportPdf');

Route::resource('paket','PaketController');
Route::resource('customer','CustomerController');
Route::resource('owner','OwnerController');

});

//After login

Route::get('/purchase', function () {
    return view('/purchase/create');
});
