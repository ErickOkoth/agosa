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

Auth::routes();
Route::get('home','HomeController@index')->name('home');
Route::get('/adddarasa','StudentController@adddarasa')->name('darasa');
Route::post('/postdarasa','StudentController@postdarasa')->name('postdarasa');
Route::get('/addstudent','StudentController@addstudent')->name('student');
Route::post('/poststudent','StudentController@poststudent')->name('poststudent');

Route::get('/darasas','StudentController@viewdarasa')->name('viewdarasa');
Route::post('/updatedarasa{$id}','StudentController@update')->name('update');
Route::get('/students','StudentController@viewstudent')->name('viewstudent');
Route::post('/updatestudent/{$id}','StudentController@updated')->name('updated');

Route::get('remove/{$id}',[
    'uses'=>'StudentController@remove',
    'as'=>'remove',
]);
Route::get('removed/{$id}',[
    'uses'=>'StudentController@removed',
    'as'=>'removed',
]);
Route::get('editdarasa/{$id',[
     'uses'=>'StudentController@editdarasa',
     'as'=>'editdarasa',
]);
Route::get('editstudent/{$id',[
    'uses'=>'StudentController@editstudent',
    'as'=>'editstudent',
]);

