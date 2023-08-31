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
    @endforeach
    <a href="{{ route('posts.create') }}">Criar Novo Post</a>
</body>

</html>
