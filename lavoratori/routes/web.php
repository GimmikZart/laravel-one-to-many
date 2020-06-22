<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'TaskController@index') ->name('home');
Route::get('/editTask/{id}', 'TaskController@edit') ->name('editTask');
Route::post('/updateTask/{id}', 'TaskController@updateTask') ->name('updateTask');
