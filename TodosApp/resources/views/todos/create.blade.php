<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar novo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <hr>
    <div class="container">
        <h2>Criar novo</h2>

        <!-- O usuário volta pra cá caso aconteça algum erro -->

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
         @endif

            <form method="POST" action="store-todo">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nome</label>
                  <input name="name" type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descrição</label>
                  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Criar</button>
              </form>
              <hr>

        <a href="/todos"> Voltar </a>
</body>
</html>
