<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$todos->name}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="centered">Editar</h2>
        <hr>
            <form method="POST" action="/todos/store/{{$todos->id}}">
                @csrf

                <div class="form-group">
                  <label for="exampleFormControlInput1">Nome</label>
                  <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $todos -> name }}">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descrição</label>
                  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $todos -> description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
              </form>
              <hr>
        <a href="/todos" class="btn btn-dark"> Voltar </a>
</body>
</html>
