<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <h1 class="text-center my-5"> Lista de Todo's </h1>

        <div class="row">
            <a href="/new" class="btn btn-success btn-sm m-4"> Novo </a>
        </div>
        <ul class="list-group">
            @foreach($todos as $todo)
            <li class="list-group-item">
                <span>{{$todo -> name}} </span>
                <div class="btn-group float-right" role="group" aria-label="Basic example">
                    <a href="/todos/{{$todo->id}}" type="a" class="btn btn-primary">Visualizar</a>
                    <a href="/todos/edit/{{$todo->id}}" type="a" class="btn btn-warning">Editar</a>
                    <a href="/todos/{{$todo->id}}/delete" type="a" class="btn btn-danger">Excluir</a>
                  </div>

            </li>
            @endforeach
        </ul>

    </div>
</body>
</html>
