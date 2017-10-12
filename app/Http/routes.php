<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/index', function () {
    return view('admin.index');
});
Route::get('/', function () {
    return view('admin.index');
});
Route::get('/component', function () {
    return view('admin.component');
});
Route::get('/form', function () {
    return view('admin.form');
});
Route::get('/element', function () {
    return view('admin.element');
});
Route::get('/table', function () {
    return view('admin.table');
});
Route::get('/portlets', function () {
    return view('admin.portlets');
});
Route::get('/charts', function () {
    return view('admin.charts');
});
Route::get('/map', function () {
    return view('admin.map');
});Route::get('/user', function () {
    return view('admin.user');
});
Route::get('/general', function () {
    return view('admin.general');
});
Route::get('/system', function () {
    return view('admin.system');
});
Route::get('/ecommerce', function (){
    return view('admin.ecommerce');
});
