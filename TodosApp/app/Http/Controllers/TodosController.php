<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodosRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function Index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function Show($todoId)
    {
        return view('todos.show')->with('todos', Todo::find($todoId));
    }

    public function Edit($todoId)
    {
        return view('todos.edit')->with('todos', Todo::find($todoId));
    }

    public function create()
    {
        return view('todos.create');

    }

    //Criar Todo
    public function storetodo()
    {
        //Validação da requisição de erro
        $validatedData = request()->validate([

            'Nome' => 'required|unique:todo|max:255',
            'todo.description' => 'required',
        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        return redirect('/todos');

    }

    //Editar Todo
    public function store($todoId)
    {
        $data = request()->all();

        $todo = Todo::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();
        return redirect('/todos');
    }

    //Apagando todo
    public function destroy($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();

        return redirect('/todos');
    }



}
