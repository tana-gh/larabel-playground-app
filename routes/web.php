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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/foo', 'FooController@index');
Route::post('/foo', 'FooController@index');

Route::get('/cookie', function () {
    return response('Set Cookie')->cookie('name', 'Hoge', 1.0);
});

Route::post('/json', function (Request $request) {
    return response()->json([ 'name' => $request->input('name') ]);
});

Route::get('/jsonresource', JsonResourceAction::class);

Route::get('/author/{id}', FindAuthorAction::class);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
