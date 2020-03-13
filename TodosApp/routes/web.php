<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodosController@Index');
Route::get('todos/{todo}', 'TodosController@Show');
Route::get('todos/edit/{todo}', 'TodosController@Edit');
Route::post('todos/store/{todo}', 'TodosController@store');

//Salva no bd
Route::post('store-todo', 'TodosController@storetodo');
//Formulario pedindo a nova
Route::get('new', 'TodosController@create');

Route::get('todos/{todo}/delete', 'TodosController@destroy');

