<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar Nova Tag</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('tags.store') }}">
        @csrf
        <div>
          <label for="title">Tag:</label>
          <input type="text" name="text" id="text" required>
        </div>
       
        <button type="submit">Criar Tag</button>
    </form>

    <a href="{{ route('tags.index') }}">Voltar para listagen de tags</a>
</body>
</html>