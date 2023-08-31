<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method("PUT")
        Titulo: <input type="text"name="title" value="{{$post->title}}">
        Conteudo:<input type="text"name="content" value="{{$post->content}}">
        <button type="submit">Enviar</button>

    </form>
</body>
</html>