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
    return view('welcome1');
});
Route::get('/about2', function () {
    return 'About';
});


Route::get('/about1', function () {
    return view('about1');
})->middleware('Testmiddleware');
Route::get('/about', function () {
    return view('about');
});
Route::resource('songs', 'SongsController');

Route::get('test1', 'Test1Controller@index');
Route::get('test2', 'Test2Controller@index');
Route::get('test3', 'Test3Controller@index');
Route::get('test4', 'Test4Controller@index');
Route::get('test5', 'Test5Controller@index');
Route::get('test6', 'Test6Controller@index');
Route::get('test7', 'Test7Controller@index');

Route::resource('todo', 'TodoController');

Route::get('email', 'MailController@email');
Route::post('sendm', 'MailController@send');


Route::get('sendmviadb', 'MailController@send');

Route::get('sendmviamailtrap', 'Mail1Controller@index');
Route::get('sendmviamailtrap2', 'Mail2Controller@send');

Route::get('users', 'Pagination@users');

Route::get('upload', 'UploadController@index');
Route::post('store', 'UploadController@store');
Route::get('show', 'UploadController@show');

Route::get('file', 'FileController@showUploadForm')->name('upload.file');
Route::post('file', 'FileController@storeFile');


Route::resource('beverage', 'BeverageController');
Route::post('beverage/buy', 'PurchaseController@buy');
