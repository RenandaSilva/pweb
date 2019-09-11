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
        
        <h3>Editando a categoria {{$categoria->nomcat}}</h3>
        
        <form action="{{route('categoria.update', $categoria->codcat)}}" method="post">
            @csrf
            @method('patch')
            
            <label for="nomcat">Nome da categoria</label><br/>
            <input type="text" name="nomcat" id="nomcat" value="{{$categoria->nomcat}}"/><br/>
            <button type="submit">Editar</button>
            
        </form>
        
    </body>
</html>


