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

Route::get('locale/{locale}', 'Tasks\TasksController@changeLocale')->name('locale');



Route::group(['prefix'=>'tasks'], function (){


    Route::get('/', 'Tasks\TasksController@index')
    ->name('tasks.index');

    Route::get('/create', 'Tasks\TasksController@create')
        ->name('tasks.create');

    Route::post('/', 'Tasks\TasksController@add')
        ->name('tasks.add');

    Route::delete('/{task}', 'Tasks\TasksController@delete')->name('tasks.delete');
});

Route::auth();

Route::get('/home', 'HomeController@index');
//Route::get('locale/{locale}', 'Tasks\TasksController@changeLocale')->name('locale');
