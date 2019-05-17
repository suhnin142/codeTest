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
Route::get('/book', 'bookController@index');
Route::get('/book/json', 'bookController@getJson');

// Route:get('/book/create',function(){
//     return view('create');
// });
Route::get('/book/create', function () {
    return view('create');
});

Route::post('/book/store', [
    'as' => 'books.store',
    'uses' => 'bookController@store',
]);
Route::post('/book/delete/{idx}', [
    'as' => 'book.delete',
    'uses' => 'bookController@delete',
]);
Route::post('/book/edit/{idx}', [
    'as' => 'book.edit',
    'uses' => 'bookController@edit',
]);
