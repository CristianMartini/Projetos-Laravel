<!DOCTYPE html>
<html>
<head>
    <title>Confirmação de Exclusão</title>
</head>
<body>
    <h1>Confirmação de Exclusão</h1>

    <p>Você está prestes a excluir a tag:</p>
    <h2>{{ $tag->text }}</h2>

    <p>Tem certeza de que deseja excluir esta postagem? Esta ação é irreversível.</p>

    <form method="POST" action="{{ route('tags.destroy', $tag->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Confirmar Exclusão</button>
    </form>

    <a href="{{ route('tags.index') }}">Cancelar</a>
</body>
</html>