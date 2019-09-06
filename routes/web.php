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

Route::get('/login', 'DataController@index');

Route::post('/certificate', 'DataController@certificate');

Route::get('/certificate/{slug}', function($slug) {
    return view('certificate')->with('name',$slug);
});

Route::get('/verify/{verify_id}', 'DataController@verify');
