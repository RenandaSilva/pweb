<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        
        <form action="{{route('categoria.store')}}" method="post">
            @csrf
            
            <label for="nomcat">Nome da categoria</label><br/>
            <input type="text" name="nomcat" id="nomcat"/><br/>
            <button type="submit">Adicionar</button>
            
        </form>
        
    </body>
</html>

