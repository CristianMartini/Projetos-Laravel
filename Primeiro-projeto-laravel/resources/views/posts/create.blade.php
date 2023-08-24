<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>

<body>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        Titulo:<input type="text"name="title"><br>
        Conteudo: <input type="text" name="content">
        <button type="submit">Enviar</button>


    </form>
</body>

</html>
