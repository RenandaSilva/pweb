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
        
        <a href="{{route('categoria.create')}}">Adicionar Categoria</a><br>
        
        <!-- Listagem de categorias -->
        <table style="width: 50%;">
            <thead>
                <tr>
                    <td>Cód.</td>
                    <td>Nome</td>
                    <td>Ação</td>
                </tr>
            </thead>
            
            <tbody>
            
                @foreach($categorias as $c)
                
                <tr>
                    <td>{{$c->codcat}}</td>
                    <td>{{$c->nomcat}}</td>
                    <td>Editar | Excluir</td>
                </tr>
                
                @endforeach
                
            </tbody>
            
        </table>
        
    </body>
</html>

