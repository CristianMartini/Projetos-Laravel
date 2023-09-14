<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Posts</title>
</head>

<body>
    <h1>Listagem de Posts</h1>

    @foreach ($posts as $post)
        <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->content }}</p>


        <!-- Dentro do loop que lista os posts -->




        <button><a href="{{ route('posts.show', $post->id) }}">Ver Detalhes</a></button>
        <button><a href="{{ route('posts.edit', $post->id) }}">Editar</a></button>
        <button> <a href="{{ route('posts.delete.confirmation', $post->id) }}">Excluir</a></button>
        <button> <a href="{{ route('posts.create') }}">Criar Novo Post</a></button>
    @endforeach
</body>

</html>
