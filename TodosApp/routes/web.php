<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodosController@Index');
Route::get('todos/{todo}', 'TodosController@Show');
Route::get('todos/edit/{todo}', 'TodosController@Edit');
Route::post('todos/store', 'TodosController@store');
