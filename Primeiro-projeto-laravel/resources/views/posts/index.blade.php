<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Posts</title>
</head>

<body>
    <h1>Listagem de Posts</h1>
    
        @foreach ($posts as $post)
        <li>
             <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                <p>{{ $post->content }}</p>
  
   
    <!-- Dentro do loop que lista os posts -->

  

   
    <a href="{{ route('posts.show', $post->id) }}">Ver Detalhes</a>
    <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
    <a href="{{ route('posts.delete.confirmation', $post->id) }}">Excluir</a>
    <a href="{{ route('posts.create') }}">Criar Novo Post</a>
</li>
@endforeach
</body>

</html>
