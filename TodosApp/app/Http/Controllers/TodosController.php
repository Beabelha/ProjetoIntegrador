<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
   public function Index(){
       return view('todos.index')-> with('todos', Todo::all());
   }

   public function Show($todoId){
    return view('todos.show')-> with('todos', Todo::find($todoId));
}

public function Edit($todoId){
    return view('todos.edit')-> with('todos', Todo::find($todoId));
}

public function store(){
    $data = request()->all();
    $todo = Todo::find($data['id']);
    $todo->name = $data['name'];
    $todo->description = $data['description'];
    $todo->save();
    return redirect('/todos');
}
}
