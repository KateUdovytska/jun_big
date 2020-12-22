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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'tasks', 'namespace'=>'Tasks'], function (){
    Route::get('/', 'TasksController@index')
    ->name('tasks.index');

    Route::get('/create', 'TasksController@create')
        ->name('tasks.create');

    Route::post('/', 'TasksController@add')
        ->name('tasks.add');

    Route::delete('/{task}', 'TasksController@delete')->name('tasks.delete');
});

Route::auth();


