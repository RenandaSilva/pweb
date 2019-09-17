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
        
        <a href="{{route('produto.create')}}">Adicionar Produto</a><br>
        
        <!-- Listagem de Produtos -->
        <table style="width: 100%;">
            <thead>
                <tr>
                    <td>Cód.</td>
                    <td>Nome</td>
                    <td>Descrição</td>
                    <td>Valor</td>
                    <td>Código</td>
                    
                </tr>
            </thead>
            
            <tbody>
            
                @foreach($produto as $c)
                
                <tr>
                    <td>{{$c->codpro}}</td>
                    <td>{{$c->nompro}}</td>
                    <td>{{$c->despro}}</td>
                    <td>{{$c->vlrpro}}</td>
                    <td>{{$c->codcat}}</td>
   
                    <td>
                        
                        <button onclick="location.href='{{route('produto.edit', $c->codpro)}}'" type="button">Editar</button>
                        
                        <form action="{{route('produto.destroy', $c->codpro)}}" method="post">
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



