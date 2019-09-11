<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>
            
            window.onload = function(){
                @if(session()->get('msg'))
                alert('{{session()->get('msg')}}');
                @endif
                
            };
            
        </script>
        
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
                    <td>
                        
                        <button onclick="location.href='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>
                        
                        <form action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    
                    </td>
                </tr>
                
                @endforeach
                
            </tbody>
            
        </table>
        
    </body>
</html>

