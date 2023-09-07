<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Posts</title>
</head>

<body>
    <h1>Listagem de Posts</h1>
    
        @foreach ($tags as $tag)
    
              <h2><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->text }}</a></h2>
               
                
   
    <!-- Dentro do loop que lista os posts -->


    <a href="{{ route('tags.show', $tag->id) }}">Ver Detalhes</a>
    <a href="{{ route('tags.edit', $tag->id) }}">Editar</a>
    <a href="{{ route('tags.delete.confirmation', $tag->id) }}">Excluir</a>

@endforeach
<a href="{{ route('tags.create') }}">Criar Nova tag</a>

</body>

</html>
