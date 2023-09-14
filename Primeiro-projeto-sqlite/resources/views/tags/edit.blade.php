<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
@if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('tags.update', $tags->id)}}" method="post">
        @csrf
        @method("PUT")
        Tag: <input type="text"name="text" value="{{$tags->text}}">
       
        <button type="submit">Salvar alterações</button>

    </form>
    
    <a href="{{ route('tags.index') }}">Voltar para a Listagem de tags</a>
</body>
</html>



