<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar Novo Post</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div>
          <label for="title">Título:</label>
          <input type="text" name="title" id="title" required>
        </div>
        <div>
          <label for="content">Conteúdo:</label>
          <textarea name="content" id="content" required></textarea>
        </div>
        <button type="submit">Criar Post</button>
    </form>

    <a href="{{ route('posts.index') }}">Voltar para a Listagem de Posts</a>
</body>
</html>