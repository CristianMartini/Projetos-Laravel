<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    
        <h2>{{ $tags->text}}</h2>
        <button><a href="{{ route('tags.index') }}">Voltar para a Listagem de Tags</a></button>

</body>
</html>